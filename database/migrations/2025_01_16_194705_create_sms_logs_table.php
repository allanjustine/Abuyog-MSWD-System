<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sms_logs', function (Blueprint $table) {
        $table->id();
        $table->string('phone_number');
        $table->text('message');
        $table->string('status'); // success or failed
        $table->text('error_message')->nullable(); // Error details if failed
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_logs');
    }
};
