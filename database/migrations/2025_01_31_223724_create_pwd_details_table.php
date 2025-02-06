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
        Schema::create('pwd_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->nullable()->constrained('beneficiaries')->onDelete('cascade');
            $table->string('type_of_disability')->nullable();
            $table->string('cause_of_disability')->nullable();
            $table->string('acquired')->nullable();
            $table->string('congenital_inborn')->nullable();
            $table->string('house_no_and_street')->nullable();
            $table->string('municipality')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('landline_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('status_of_employment')->nullable();
            $table->string('category_of_employment')->nullable();
            $table->string('types_of_employment')->nullable();
            $table->string('organization_affiliated')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('office_address')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('gsis_no')->nullable();
            $table->string('pag_ibig_no')->nullable();
            $table->string('psn_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('pwd_number')->nullable();
            $table->string('application_type')->nullable();
            $table->enum('accomplished_by', ['applicant', 'guardian', 'representative'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pwd_details');
    }
};
