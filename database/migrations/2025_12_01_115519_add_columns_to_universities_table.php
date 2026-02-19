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
    Schema::table('universities', function (Blueprint $table) {
      $table->after('contact_number2', function ($table) {
        $table->boolean('is_local')->nullable();
        $table->boolean('is_international')->nullable();
        $table->json('study_options')->nullable();
      });
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('universities', function (Blueprint $table) {
      $table->dropColumn('is_local');
      $table->dropColumn('is_international');
      $table->dropColumn('study_options');
    });
  }
};
