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
        Schema::table('cache', function (Blueprint $table) {
            $table->string('key', 512)->change(); // Increase from 255 to 512
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cache', function (Blueprint $table) {
            $table->string('key', 255)->change();
        });
    }
};
