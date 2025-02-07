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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('suffix')->nullable(); // Added suffix
            $table->date('date_of_birth');
            $table->integer('age')->unsigned();
            $table->string('gender');
            $table->string('place_of_birth')->nullable(); // Added place of birth
            $table->foreignId('program_enrolled')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('barangay_id')->nullable(); // Foreign key for barangay
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('set null');
            $table->string('civil_status')->nullable();
            $table->string('educational_attainment')->nullable(); // Added educational attainment
            $table->string('occupation')->nullable(); // Added occupation
            $table->string('religion')->nullable(); // Added religion
            $table->string('monthly_income')->nullable(); // Adjust the migration if needed
            $table->string('annual_income')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('id_number')->nullable(); // Added ID number
            $table->string('other_skills')->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('appearance_date')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('accepted_by')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('user_id')->constrained('users')->onDelete('set null');
            $table->string('status')->nullable()->default('pending');
            $table->string('cancellation_reason')->nullable();
            $table->string('complete_address')->nullable();
            $table->integer('message_count')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
