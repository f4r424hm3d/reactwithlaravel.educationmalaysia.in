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
      $table->after('other_fee', function (Blueprint $table) {
        $table->decimal('scholarship_amount', 12, 2)->nullable();
        $table->decimal('tution_fee_after_scholarship', 12, 2)->nullable();
      });
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('university_programs', function (Blueprint $table) {
      $table->dropColumn(['scholarship_amount', 'tution_fee_after_scholarship']);
    });
  }
};
