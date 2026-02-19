<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
  public function scopeWebsite($query)
  {
    return $query->where('website', site_var);
  }
  public function contents()
  {
    return $this->hasMany(InternshipContent::class, 'internship_id')->orderBy('position', 'asc');
  }
  public function faqs()
  {
    return $this->hasMany(InternshipFaq::class, 'internship_id');
  }
}
