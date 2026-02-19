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
    Schema::table('blogs', function (Blueprint $table) {
      $table->unsignedBigInteger('created_by')->nullable();
      $table->unsignedBigInteger('updated_by')->nullable();
      $table->unsignedBigInteger('approved_by')->nullable();

      // Now add foreign keys
      $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
      $table->foreign('updated_by')->references('id')->on('users')->nullOnDelete();
      $table->foreign('approved_by')->references('id')->on('users')->nullOnDelete();
    });
  }


  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('blogs', function (Blueprint $table) {
      $table->dropForeign(['created_by']);
      $table->dropForeign(['updated_by']);
      $table->dropForeign(['approved_by']);

      $table->dropColumn(['created_by', 'updated_by', 'approved_by']);
    });
  }
};
