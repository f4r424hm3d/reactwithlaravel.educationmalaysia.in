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
    Schema::table('university_programs', function (Blueprint $table) {
      $table->after('campus', function ($table) {
        $table->boolean('is_local')->nullable()->default(false);
        $table->boolean('is_international')->nullable()->default(false);
      });
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('university_programs', function (Blueprint $table) {
      $table->dropColumn('is_local');
      $table->dropColumn('is_international');
    });
  }
};
