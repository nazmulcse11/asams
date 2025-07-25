<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->unsignedBigInteger('floor_id')->nullable()->after('block_id');
        });

        // Populate floor_id based on the relation: shop -> block -> floor
        DB::statement("
            UPDATE shops
            JOIN blocks ON shops.block_id = blocks.id
            SET shops.floor_id = blocks.floor_id
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('floor_id');
        });
    }
};
