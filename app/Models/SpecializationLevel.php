<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecializationLevel extends Model
{
  protected $guarded = [];
  public function contents()
  {
    return $this->hasMany(SpecializationLevelContent::class, 'specialization_level_id', 'id')->orderBy('position', 'asc');
  }
  public function specialization()
  {
    return $this->belongsTo(CourseSpecialization::class, 'specialization_id', 'id');
  }
}
