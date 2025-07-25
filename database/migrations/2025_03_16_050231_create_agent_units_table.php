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
        Schema::create('agent_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
            $table->decimal('commission', 12, 2)->nullable();
            $table->decimal('security_money', 12, 2)->nullable();
            $table->decimal('sale_price', 12, 2)->nullable();
            $table->decimal('actual_sale_price', 12, 2)->nullable();
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade')->after('actual_sale_price');
            $table->foreignId('added_by')->constrained('users')->onDelete('cascade')->after('status_id');
            $table->foreignId('approve_by')->nullable()->constrained('users')->onDelete('set null')->after('added_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_units');
    }
};
