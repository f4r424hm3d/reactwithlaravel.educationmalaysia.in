<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('our_partners', function (Blueprint $table) {
      $table->id();

      // Basic Profile
      $table->string('name'); // Dr. Rajesh Kumar
      $table->string('designation'); // Senior Education Consultant
      $table->string('company')->nullable(); // MedEdu Consultants Pvt Ltd

      // Profile Media
      $table->string('profile_image')->nullable(); // image path
      $table->boolean('is_verified')->default(false); // Verified badge

      // Rating
      $table->decimal('rating', 2, 1)->default(0.0); // 4.9

      // Contact Info
      $table->string('phone')->nullable(); // +91 98765 43210
      $table->string('email')->nullable();

      // Location
      $table->string('city')->nullable(); // New Delhi
      $table->string('state')->nullable(); // Delhi
      $table->string('country')->nullable(); // India

      // Experience & Stats
      $table->unsignedInteger('experience_years')->default(0); // 12 years
      $table->unsignedInteger('students_placed')->default(0); // 450

      // Specializations (comma-separated OR JSON)
      $table->json('specializations')->nullable();
      // Example: ["MBBS Admissions", "Medical Counseling"]

      // Status
      $table->boolean('is_active')->default(true);

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('our_partners');
  }
};
