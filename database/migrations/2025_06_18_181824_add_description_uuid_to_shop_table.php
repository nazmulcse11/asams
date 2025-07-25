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
            $table->string('uuid', 20)->nullable()->after('id');
            $table->uuid('description')->nullable()->after('number');
        });

        // Backfill existing rows with unique UUIDs
        $items = DB::table('shops')->get();
        foreach ($items as $item) {
            do {
                $uuid = random_int(100000000000, 999999999999);
            } while (
                DB::table('shops')->where('uuid', $uuid)->exists()
            );

            DB::table('shops')->where('id', $item->id)->update([
                'uuid' => $uuid,
            ]);
        }

        // Now apply UNIQUE constraint after values are filled
        Schema::table('shops', function (Blueprint $table) {
            $table->unique('uuid');
            $table->string('uuid', 20)->nullable(false)->change(); // Optional: make not null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('uuid');
            $table->dropColumn('description');
        });
    }
};
