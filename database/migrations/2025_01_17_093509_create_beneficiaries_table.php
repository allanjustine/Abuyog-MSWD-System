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
            $table->unsignedBigInteger('program_enrolled');
            $table->foreign('program_enrolled')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('barangay_id')->nullable(); // Foreign key for barangay
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('set null');
            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Divorced']);
            $table->string('educational_attainment')->nullable(); // Added educational attainment
            $table->string('occupation')->nullable(); // Added occupation
            $table->string('religion')->nullable(); // Added religion
            $table->string('monthly_income')->nullable(); // Adjust the migration if needed
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('id_number')->nullable(); // Added ID number

            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();

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
