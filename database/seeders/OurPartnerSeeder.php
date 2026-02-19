<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurPartner;

class OurPartnerSeeder extends Seeder
{
  public function run()
  {
    $partners = [
      [
        'name' => 'Dr. Rajesh Kumar',
        'designation' => 'Senior Education Consultant',
        'company' => 'MedEdu Consultants Pvt Ltd',
        'profile_image' => null,
        'is_verified' => true,
        'rating' => 4.9,
        'phone' => '+91 9876543210',
        'email' => 'rajesh@mededu.com',
        'city' => 'Kochi',
        'state' => 'Kerala',
        'country' => 'India',
        'experience_years' => 12,
        'students_placed' => 450,
        'specializations' => json_encode([
          'MBBS Admissions',
          'Medical Counseling'
        ]),
        'is_active' => true,
      ],
      [
        'name' => 'Ankit Shah',
        'designation' => 'Education Advisor',
        'company' => 'EduPath',
        'profile_image' => null,
        'is_verified' => true,
        'rating' => 4.7,
        'phone' => '+91 9988776655',
        'email' => 'ankit@edupath.com',
        'city' => 'Mumbai',
        'state' => 'Maharashtra',
        'country' => 'India',
        'experience_years' => 9,
        'students_placed' => 320,
        'specializations' => json_encode([
          'Overseas Education',
          'Career Counseling'
        ]),
        'is_active' => true,
      ],
      [
        'name' => 'Sarah Johnson',
        'designation' => 'International Consultant',
        'company' => 'GlobalStudy',
        'profile_image' => null,
        'is_verified' => false,
        'rating' => 4.5,
        'phone' => '+1 5551234567',
        'email' => 'sarah@globalstudy.com',
        'city' => 'New York',
        'state' => 'New York',
        'country' => 'USA',
        'experience_years' => 7,
        'students_placed' => 210,
        'specializations' => json_encode([
          'Study Abroad',
          'Visa Counseling'
        ]),
        'is_active' => true,
      ],
    ];

    OurPartner::insert($partners);
  }
}
