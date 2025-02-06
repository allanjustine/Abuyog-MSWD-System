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
        Schema::create('aics_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->nullable()->constrained('beneficiaries')->onDelete('cascade');
            $table->string('case_no')->nullable();
            $table->enum('new_or_old', ['new', 'old'])->nullable();
            $table->date('date_applied')->nullable();
            $table->string('source_of_referral')->nullable();
            $table->text('problem_presented')->nullable();
            $table->text('findings')->nullable();
            $table->text('action_taken')->nullable();
            $table->string('type_of_assistance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aics_details');
    }
};
