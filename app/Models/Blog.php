<?php

namespace App\Models;

use App\Http\Controllers\front\BlogFc;
use App\Models\Scopes\WebsiteScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
  use HasFactory;
  protected $guarded = [];
  protected static function booted()
  {
    static::addGlobalScope(new WebsiteScope);

    // 🔹 when creating a blog
    static::creating(function ($blog) {
      if (Auth::check()) {
        $user = Auth::user();
        $blog->created_by = $user->id;
        $blog->updated_by = $user->id; // first time updater = creator
        $isSubAdmin = $user->userRoles()->where('role', 'sub-admin')->exists();
        // Condition for admin / non-admin
        if ($user->role != 'admin' && !$isSubAdmin) {
          $blog->status = 0; // pending if not admin
        } else {
          $blog->status = 1;
        }
      }
    });

    // 🔹 when updating a blog
    static::updating(function ($blog) {
      if (Auth::check()) {
        $user = Auth::user();
        $blog->updated_by = $user->id;
        $isSubAdmin = $user->userRoles()->where('role', 'sub-admin')->exists();
        // if ($user->role != 'admin' && !$isSubAdmin) {
        //   $blog->status = 0; // non-admin updates → always pending
        // } else {
        //   $blog->status = 1;
        // }
      }
    });
  }


  public function category()
  {
    return $this->hasOne(BlogCategory::class, 'id', 'category_id');
  }
  public function getCategory()
  {
    return $this->hasOne(BlogCategory::class, 'id', 'category_id')->select('id', 'category_name', 'category_slug');
  }
  public function contents()
  {
    return $this->hasMany(BlogContent::class, 'blog_id', 'id')->orderBy('position', 'asc');
  }
  public function faqs()
  {
    return $this->hasMany(BlogFaq::class, 'blog_id', 'id');
  }
  public function parentContents()
  {
    return $this->hasMany(BlogContent::class, 'blog_id', 'id')->orderBy('position', 'asc')->where('parent_id', null);
  }
  public function author()
  {
    return $this->hasOne(Author::class, 'id', 'author_id');
  }
  public function scopeWebsite($query)
  {
    return $query->where('website', site_var);
  }

  public function creator()
  {
    return $this->belongsTo(User::class, 'created_by');
  }

  public function updater()
  {
    return $this->belongsTo(User::class, 'updated_by');
  }

  public function approver()
  {
    return $this->belongsTo(User::class, 'approved_by');
  }

  public function scopeActive($query)
  {
    return $query->where('status', '1');
  }
}
