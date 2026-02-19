<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurPartner extends Model
{
  protected $fillable = [
    'name',
    'designation',
    'company',
    'profile_image',
    'is_verified',
    'rating',
    'phone',
    'email',
    'city',
    'state',
    'country',
    'experience_years',
    'students_placed',
    'specializations',
    'is_active',
  ];

  protected $casts = [
    'is_verified' => 'boolean',
    'is_active' => 'boolean',
    'specializations' => 'array',
    'rating' => 'decimal:1',
  ];
}
