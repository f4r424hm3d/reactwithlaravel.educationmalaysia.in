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
    Schema::create('international_student_data', function (Blueprint $table) {
      $table->id();
      $table->unsignedSmallInteger('year');
      $table->unsignedBigInteger('country_id')->nullable();
      $table->foreign('country_id')->references('id')->on('international_student_data_countries')->onDelete('set null');
      $table->unsignedInteger('count')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('international_student_data');
  }
};
