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
        Schema::table('agent_units', function (Blueprint $table) {
            $table->dropForeign(['property_id']);
            $table->dropColumn('property_id');

            // Add new foreign key to shops table
            $table->foreignId('shop_id')
                ->constrained('shops')
                ->onDelete('cascade')
                ->after('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agent_units', function (Blueprint $table) {
            $table->dropForeign(['shop_id']);
            $table->dropColumn('shop_id');

            // Restore property_id foreign key
            $table->foreignId('property_id')
                ->constrained('properties')
                ->onDelete('cascade');
        });
    }
};
