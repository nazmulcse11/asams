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
        Schema::create('agent_payments', function (Blueprint $table) {
            $table->id();
            $table->string('public_id', 20)->unique();
            $table->foreignId('agent_id')->constrained()->cascadeOnDelete();
            $table->foreignId('shop_id')->constrained()->cascadeOnDelete();
            $table->foreignId('agent_shop_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 15, 2);
            $table->date('date');
            $table->foreignId('payment_mode_id')->constrained()->cascadeOnDelete();
            $table->string('reference')->nullable(); // Ref / Txn
            $table->string('document_path')->nullable(); // Screenshot/Slip/Cheque
            $table->text('notes')->nullable();
            $table->text('employee_notes')->nullable();
            $table->text('admin_notes')->nullable();
            $table->foreignId('status_id')->constrained('statuses')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_payments');
    }
};
