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
    Schema::table('page_banners', function (Blueprint $table) {
      $table->after('page', function ($table) {
        $table->string('alt_text')->nullable();
        $table->string('title')->nullable();
        $table->string('description')->nullable();
      });
      $table->renameColumn('bannername', 'banner_name');
      $table->renameColumn('bannerpath', 'banner_path');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('page_banners', function (Blueprint $table) {
      $table->dropColumn(['alt_text', 'title', 'description']);
      $table->renameColumn('banner_name', 'bannername');
      $table->renameColumn('banner_path', 'bannerpath');
    });
  }
};
