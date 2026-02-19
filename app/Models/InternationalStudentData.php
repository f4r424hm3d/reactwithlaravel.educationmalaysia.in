<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternationalStudentData extends Model
{
  protected $guarded = [];
  public function country()
  {
    return $this->belongsTo(InternationalStudentDataCountry::class, 'country_id');
  }
}
