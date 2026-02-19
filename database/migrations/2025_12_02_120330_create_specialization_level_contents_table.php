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
    Schema::create('specialization_level_contents', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->nullable();
      $table->longText('description')->nullable();
      $table->integer('position')->nullable();
      $table->unsignedBigInteger('specialization_level_id');
      $table->foreign('specialization_level_id')->references('id')->on('specialization_levels')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('specialization_level_contents');
  }
};
