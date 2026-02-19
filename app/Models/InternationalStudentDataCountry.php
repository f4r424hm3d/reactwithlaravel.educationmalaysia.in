<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternationalStudentDataCountry extends Model
{
  protected $guarded = [];
  public function applications()
  {
    return $this->hasMany(InternationalStudentData::class, 'country_id');
  }
}
