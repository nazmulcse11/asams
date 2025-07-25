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
        Schema::table('buyer_shops', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_shop_id')->after('agent_id');
            $table->unsignedBigInteger('status_id')->after('agent_shop_id');
            $table->text("notes")->nullable()->after('status_id');

            $table->foreign('agent_shop_id')->references('id')->on('agent_shops')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buyer_shops', function (Blueprint $table) {
            $table->dropForeign(['agent_shop_id']);
            $table->dropForeign(['status_id']);

            $table->dropColumn('agent_shop_id');
            $table->dropColumn('status_id');
            $table->dropColumn('notes');

        });
    }
};
