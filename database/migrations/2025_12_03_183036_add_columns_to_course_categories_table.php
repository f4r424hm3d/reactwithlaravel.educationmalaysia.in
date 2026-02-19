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
    Schema::table('course_categories', function (Blueprint $table) {
      $table->text('courses_description')->nullable()->after('icon_class');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('course_categories', function (Blueprint $table) {
      $table->dropColumn('courses_description');
    });
  }
};
