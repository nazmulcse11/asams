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
        Schema::table('buyer_installments', function (Blueprint $table) {
            $table->dropForeign(['buyer_payment_id']);
        });

        Schema::dropIfExists('buyer_payments');

        Schema::create('buyer_payments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('buyer_shop_id');
            $table->decimal('amount', 15, 2);
            $table->unsignedBigInteger('payment_type_id');
            $table->unsignedBigInteger('payment_mode_id');
            $table->date('payment_date');

            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('buyer_shop_id')->references('id')->on('buyer_shops')->onDelete('cascade');
            $table->foreign('payment_type_id')->references('id')->on('payment_types')->onDelete('restrict');
            $table->foreign('payment_mode_id')->references('id')->on('payment_modes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_payments');
    }
};
