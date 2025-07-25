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
        Schema::table('buyers', function (Blueprint $table) {
            $table->unsignedBigInteger('buyer_type_id')
                ->after('id')
                ->nullable();

            $table->foreign('buyer_type_id')
                ->references('id')
                ->on('buyer_types')
                ->onDelete('set null')
                ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->dropForeign(['buyer_type_id']);
            $table->dropColumn('buyer_type_id');
        });
    }
};
