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
        Schema::table('agent_shops', function (Blueprint $table) {
            // Drop foreign key first
            $table->dropForeign(['reserve_type_id']);
            // Then drop the column
            $table->dropColumn('reserve_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agent_shops', function (Blueprint $table) {
            $table->unsignedBigInteger('reserve_type_id')->nullable();
            $table->foreign('reserve_type_id')->references('id')->on('reserve_types')->onDelete('set null');
        });
    }
};
