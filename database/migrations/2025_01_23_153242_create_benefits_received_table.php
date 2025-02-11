<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitsReceivedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits_received', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_id'); // Foreign key for beneficiaries
            $table->foreignId('assistance_id')->nullable()->constrained('assistances')->onDelete('cascade');
            $table->string('name_of_assistance'); // Name of the assistance
            $table->decimal('amount', 10, 2)->nullable(); // Amount of the assistance
            $table->date('date_received')->nullable()->default(null);
            $table->string('status')->default('Pending'); // Options: Pending, Received, Not Received
            $table->text('not_received_reason')->nullable(); // Optional reason
            $table->string('type_of_assistance')->default('Others');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('beneficiary_id')->references('id')->on('beneficiaries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benefits_received');
    }
}
