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
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('house_no_street')->nullable();
            $table->string('municipality')->nullable();
            $table->string('region')->nullable();
            $table->string('province')->nullable();
            $table->string('religion')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('land_line_no')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('occupation')->nullable();
            $table->string('status_of_employment')->nullable();
            $table->string('types_of_employment')->nullable();
            $table->string('category_of_employment')->nullable();
            $table->string('organization_affiliated')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('office_address')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('gsis_no')->nullable();
            $table->string('pag_ibig_no')->nullable();
            $table->string('psn_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('four_ps_beneficiary')->nullable();
            $table->string('indigenouse_person')->nullable();
            $table->string('company_agency')->nullable();
            $table->string('icoe_name')->nullable();
            $table->string('icoe_address')->nullable();
            $table->string('icoe_relationship')->nullable();
            $table->string('icoe_contact_number')->nullable();
            $table->string('skills')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('type_of_disability')->nullable();
            $table->string('cause_of_disability')->nullable();
            $table->string('pwd_status')->nullable();
            $table->string('pwd_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_infos');
    }
};
