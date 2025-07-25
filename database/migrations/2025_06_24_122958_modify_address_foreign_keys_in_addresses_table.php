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
        Schema::table('addresses', function (Blueprint $table) {
            Schema::table('addresses', function (Blueprint $table) {
                $table->dropColumn(['city', 'state', 'country']);
            });

            Schema::table('addresses', function (Blueprint $table) {
                $table->foreignId('city_id')
                    ->nullable()
                    ->after("address_line2")
                    ->constrained('cities')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();
                $table->foreignId('state_id')
                    ->nullable()
                    ->after("city_id")
                    ->constrained('states')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();
                $table->foreignId('country_id')
                    ->nullable()
                    ->after("state_id")
                    ->constrained('countries')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            Schema::table('addresses', function (Blueprint $table) {
                $table->dropForeign(['city_id']);
                $table->dropForeign(['state_id']);
                $table->dropForeign(['country_id']);
                $table->dropColumn(['city_id', 'state_id', 'country_id']);
            });

            Schema::table('addresses', function (Blueprint $table) {
                $table->string('city', 100)->nullable();
                $table->string('state', 100)->nullable();
                $table->string('country', 100)->nullable();
            });
        });
    }
};
