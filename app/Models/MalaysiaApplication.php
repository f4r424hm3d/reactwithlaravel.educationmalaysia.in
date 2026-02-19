<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MalaysiaApplication extends Model
{
  protected $guarded = [];
  public function category()
  {
    return $this->belongsTo(MalaysiaApplicationCategory::class, 'category_id');
  }
}
