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
        Schema::create('buyer_installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('buyers')->onDelete('cascade');
            $table->foreignId('installment_id')->constrained('installments')->onDelete('cascade');
            $table->foreignId('buyer_payment_id')->constrained('buyer_payments')->onDelete('cascade');
            $table->decimal('payment_amount', 12, 2);
            $table->foreignId('payment_mode_id')->constrained('payment_modes')->onDelete('cascade');
            $table->timestamp('payment_date')->useCurrent();
            $table->text('payment_ref')->nullable();
            $table->foreignId('added_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyer_installments');
    }
};
