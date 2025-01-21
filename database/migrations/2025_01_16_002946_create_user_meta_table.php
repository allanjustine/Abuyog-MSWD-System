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
        Schema::table('user_meta', function (Blueprint $table) {
            // Add user_id column if it doesn't exist
            if (!Schema::hasColumn('user_meta', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }

            // Change meta_value to longText
            $table->longText('meta_value')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('user_meta', function (Blueprint $table) {
            // Drop foreign key and user_id column if exists
            if (Schema::hasColumn('user_meta', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }

            // Revert meta_value back to string
            $table->string('meta_value', 255)->change();
        });
    }
};
