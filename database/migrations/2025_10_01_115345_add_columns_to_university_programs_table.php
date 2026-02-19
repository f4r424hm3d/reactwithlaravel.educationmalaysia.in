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
      $table->after('additional_note', function (Blueprint $table) {
        $table->decimal('year1_tuition_fee', 12, 2)->nullable();
        $table->decimal('year2_tuition_fee', 12, 2)->nullable();
        $table->decimal('year3_tuition_fee', 12, 2)->nullable();
        $table->decimal('year4_tuition_fee', 12, 2)->nullable();
        $table->decimal('accommodation_fee', 12, 2)->nullable();
        $table->decimal('airport_pickup_fee', 12, 2)->nullable();
        $table->decimal('anual_tuition_fee_local', 12, 2)->nullable();
        $table->decimal('year1_tuition_fee_local', 12, 2)->nullable();
        $table->decimal('year2_tuition_fee_local', 12, 2)->nullable();
        $table->decimal('year3_tuition_fee_local', 12, 2)->nullable();
        $table->decimal('year4_tuition_fee_local', 12, 2)->nullable();
        $table->decimal('total_tuition_fee_local', 12, 2)->nullable();
        $table->text('campus')->nullable();
      });
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('university_programs', function (Blueprint $table) {
      $table->dropColumn([
        'year1_tuition_fee',
        'year2_tuition_fee',
        'year3_tuition_fee',
        'year4_tuition_fee',
        'accommodation_fee',
        'airport_pickup_fee',
        'anual_tuition_fee_local',
        'year1_tuition_fee_local',
        'year2_tuition_fee_local',
        'year3_tuition_fee_local',
        'year4_tuition_fee_local',
        'total_tuition_fee_local',
        'campus',
      ]);
    });
  }
};
