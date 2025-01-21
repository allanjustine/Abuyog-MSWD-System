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
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('latitude', 10, 6);  // Latitude for the Barangay
            $table->decimal('longitude', 10, 6); // Longitude for the Barangay
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangays');
    }
};
// class CreateBarangaysTable extends Migration
// {
//     public function up()
//     {
//         Schema::create('barangays', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->decimal('latitude', 10, 7);  // Add latitude column
//             $table->decimal('longitude', 10, 7); // Add longitude column
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::dropIfExists('barangays');
//     }
// }
