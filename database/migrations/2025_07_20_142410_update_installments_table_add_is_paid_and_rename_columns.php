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
            $table->dropForeign('buyer_installments_installment_id_foreign');
        });

        // Drop the old table completely (if exists)
        Schema::dropIfExists('installments');

        // Create the new table with your target schema
        Schema::create('installments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buyer_shop_id');
            $table->string('title');
            $table->date('due_date');
            $table->decimal('amount', 15, 2);
            $table->boolean('is_paid')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('buyer_shop_id')->references('id')->on('buyer_shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the new table
        Schema::dropIfExists('installments');

        // Recreate the old table structure
        Schema::create('installments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buyer_shop_id')->nullable();
            $table->unsignedBigInteger('buyer_id');
            $table->integer('installment_no');
            $table->decimal('installment_amount', 12, 2);
            $table->string('installment_percent')->nullable();
            $table->decimal('paid_amount', 12, 2)->default(0.00);
            $table->decimal('due_amount', 12, 2);
            $table->string('remarks')->nullable();
            $table->date('installment_date')->nullable();
            $table->unsignedBigInteger('payment_type_id');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('shop_id');

            // Foreign keys (adjust according to your actual foreign keys)
            $table->foreign('buyer_shop_id')->references('id')->on('buyer_shops')->onDelete('set null');
            $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->foreign('payment_type_id')->references('id')->on('payment_types')->onDelete('cascade');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }
};
