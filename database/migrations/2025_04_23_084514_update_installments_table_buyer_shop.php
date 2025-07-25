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
        Schema::table('installments', function (Blueprint $table) {
            // Drop old foreign key if exists
            if (Schema::hasColumn('installments', 'agent_unit_id')) {
                $table->dropForeign(['agent_unit_id']);
                $table->dropColumn('agent_unit_id');
            }

            // Add new nullable buyer_shop_id with FK
            $table->unsignedBigInteger('buyer_shop_id')->nullable()->after('id');
            $table->foreign('buyer_shop_id')->references('id')->on('buyer_shops')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('installments', function (Blueprint $table) {
            // Remove new FK
            $table->dropForeign(['buyer_shop_id']);
            $table->dropColumn('buyer_shop_id');

            // Re-add agent_unit_id
            $table->unsignedBigInteger('agent_unit_id')->nullable();
            $table->foreign('agent_unit_id')->references('id')->on('agent_units')->onDelete('set null');
        });
    }
};
