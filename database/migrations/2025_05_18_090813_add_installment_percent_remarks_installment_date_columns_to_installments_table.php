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
            $table->string('installment_percent')->nullable()->after("installment_amount");
            $table->string('remarks')->nullable()->after("due_amount");
            $table->date('installment_date')->nullable()->after("remarks");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('installments', function (Blueprint $table) {
            $table->dropColumn('installment_percent');
            $table->dropColumn('remarks');
            $table->dropColumn('installment_date');
        });
    }
};
