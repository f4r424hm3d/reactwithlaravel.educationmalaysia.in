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
    Schema::create('internships', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->unique();
      $table->string('active_status')->nullable();
      $table->string('thumbnail_name')->nullable();
      $table->string('thumbnail_path')->nullable();
      $table->text('shortnote')->nullable();
      $table->string('website')->default('MYS');
      $table->text('meta_title')->nullable();
      $table->text('meta_keyword')->nullable();
      $table->text('meta_description')->nullable();
      $table->decimal('seo_rating', 2, 1)->nullable();
      $table->decimal('best_rating', 2, 1)->nullable();
      $table->integer('review_number')->nullable();
      $table->string('og_image_name')->nullable();
      $table->string('og_image_path')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('internships');
  }
};
