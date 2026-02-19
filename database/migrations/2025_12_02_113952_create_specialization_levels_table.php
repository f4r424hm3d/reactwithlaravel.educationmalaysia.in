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
    Schema::create('specialization_levels', function (Blueprint $table) {
      $table->id();
      $table->string('level');
      $table->string('level_slug')->nullable();
      $table->string('duration')->nullable();
      $table->string('tuition_fees')->nullable();
      $table->string('intake')->nullable();
      $table->string('accreditation')->nullable();
      $table->unsignedBigInteger('specialization_id');
      $table->foreign('specialization_id')->references('id')->on('course_specializations')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('specialization_levels');
  }
};
