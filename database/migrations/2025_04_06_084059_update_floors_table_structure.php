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
        Schema::table('floors', function (Blueprint $table) {
            $table->foreignId('property_id')
                ->constrained('properties')
                ->onDelete('cascade')
                ->after('id');
            $table->string('name')->notNull()->after('number');
            $table->integer('no_of_units')->default(0)->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('floors', function (Blueprint $table) {
            if (Schema::hasColumn('floors', 'property_id')) {
                $table->dropForeign(['property_id']);
            }
        });
        Schema::table('floors', function (Blueprint $table) {
            $table->dropColumn(['property_id', 'name', 'no_of_units']);
        });
    }
};
