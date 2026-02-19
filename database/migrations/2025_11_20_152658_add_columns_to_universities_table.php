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
          $table->after('latitude_longitude', function ($table) {
              $table->json('approved_by')->nullable();
              $table->json('accredited_by')->nullable();
              $table->json('hostel_facility')->nullable();
              $table->string('malaysia_rank')->nullable();
              $table->string('qs_asia_rank')->nullable();
              $table->integer('local_students')->nullable();
              $table->integer('international_students')->nullable();
              $table->string('contact_number1')->nullable();
              $table->string('contact_number2')->nullable();
          });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universities', function (Blueprint $table) {
            //
        });
    }
};
