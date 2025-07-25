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
            if (Schema::hasColumn('properties', 'address')) {
                $table->dropColumn('address');
            }

            // Add address_id foreign key
            $table->foreignId('address_id')
                ->nullable()
                ->after("property_setup_id")
                ->constrained('addresses')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
            $table->dropColumn('address_id');

            // Optional: restore old address string column
            $table->string('address')->nullable();
        });
    }
};
