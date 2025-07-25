<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('buyer_payments', function (Blueprint $table) {
            // Drop the foreign key first
            $table->dropForeign(['installment_id']);
            $table->dropColumn('installment_id');

            // Add the new shop_id field and make it a foreign key
            $table->unsignedBigInteger('shop_id')->after('buyer_id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('buyer_payments', function (Blueprint $table) {
            // Rollback logic: Add installment_id back
            $table->unsignedBigInteger('installment_id')->nullable();
            $table->foreign('installment_id')->references('id')->on('installments')->onDelete('cascade');

            // Remove shop_id
            $table->dropForeign(['shop_id']);
            $table->dropColumn('shop_id');
        });
    }
};
