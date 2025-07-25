<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->string('uuid', 20)->nullable()->after('id');
        });

        // Backfill existing rows with unique UUIDs
        $buyers = DB::table('buyers')->get();
        foreach ($buyers as $buyer) {
            do {
                $uuid = random_int(100000000000, 999999999999);
            } while (
                DB::table('buyers')->where('uuid', $uuid)->exists()
            );

            DB::table('buyers')->where('id', $buyer->id)->update([
                'uuid' => $uuid,
            ]);
        }

        // Now apply UNIQUE constraint after values are filled
        Schema::table('buyers', function (Blueprint $table) {
            $table->unique('uuid');
            $table->string('uuid', 20)->nullable(false)->change(); // Optional: make not null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buyers', function (Blueprint $table) {
            Schema::table('buyers', function (Blueprint $table) {
                $table->dropUnique(['uuid']);
                $table->dropColumn('uuid');
            });
        });
    }
};
