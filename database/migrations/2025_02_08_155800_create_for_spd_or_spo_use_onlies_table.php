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
        Schema::create('for_spd_or_spo_use_onlies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solo_parent_detail_id')->constrained()->onDelete('cascade');
            $table->string('status')->nullable();
            $table->string('id_type')->nullable();
            $table->string('card_number')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('for_spd_or_spo_use_onlies');
    }
};
