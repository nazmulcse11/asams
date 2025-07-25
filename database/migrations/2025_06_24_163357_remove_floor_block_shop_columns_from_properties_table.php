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
        Schema::table('properties', function (Blueprint $table) {
            if (Schema::hasColumn('properties', 'number_of_floors')) {
                $table->dropColumn('number_of_floors');
            }

            if (Schema::hasColumn('properties', 'number_of_block')) {
                $table->dropColumn('number_of_block');
            }

            if (Schema::hasColumn('properties', 'number_of_shop')) {
                $table->dropColumn('number_of_shop');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->unsignedInteger('number_of_floors')->nullable();
            $table->string('number_of_block')->nullable(); // varchar(255)
            $table->unsignedInteger('number_of_shop')->nullable(); // assuming it's int
        });
    }
};
