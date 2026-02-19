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
      $table->after('nri_discount', function (Blueprint $table) {
        $table->decimal('total_fee', 12, 2)->nullable();
        $table->decimal('total_tuition_fee', 12, 2)->nullable();
        $table->decimal('annual_tuition_fee', 12, 2)->nullable();
        $table->decimal('registration_fee', 12, 2)->nullable();
        $table->decimal('laboratory_fee', 12, 2)->nullable();
        $table->decimal('technology_fee', 12, 2)->nullable();
        $table->decimal('student_activity_fee', 12, 2)->nullable();
        $table->decimal('insurance_fee', 12, 2)->nullable();
        $table->decimal('examination_fee', 12, 2)->nullable();
        $table->decimal('emgs_processing_fee', 12, 2)->nullable();
        $table->decimal('international_security_deposit', 12, 2)->nullable();
        $table->decimal('international_student_charge', 12, 2)->nullable();
        $table->decimal('international_administration_fee', 12, 2)->nullable();
        $table->decimal('resources_fee', 12, 2)->nullable();
        $table->decimal('commitment_fee', 12, 2)->nullable();
        $table->decimal('facilities_fee', 12, 2)->nullable();
        $table->decimal('other_fee', 12, 2)->nullable();
        $table->timestamp('last_update')->nullable();
        $table->string('currency', 10)->nullable();
        $table->text('additional_note')->nullable();
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
        'total_fee',
        'total_tuition_fee',
        'annual_tuition_fee',
        'registration_fee',
        'laboratory_fee',
        'technology_fee',
        'student_activity_fee',
        'insurance_fee',
        'examination_fee',
        'emgs_processing_fee',
        'international_security_deposit',
        'international_student_charge',
        'international_administration_fee',
        'resources_fee',
        'commitment_fee',
        'facilities_fee',
        'other_fee',
        'last_update',
        'currency',
        'additional_note',
      ]);
    });
  }
};
