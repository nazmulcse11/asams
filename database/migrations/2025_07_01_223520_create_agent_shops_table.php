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
        Schema::create('agent_shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->references('id')->on('agents')->onDelete('cascade');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade');
            $table->foreignId('reserve_type_id')->references('id')->on('reserve_types')->onDelete('cascade');
            $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('set null');
            $table->string('duration')->nullable()->comment("in days");
            $table->string('sale_price');
            $table->string('security_deposit');
            $table->string('commission_type')->comment("percent or amount");
            $table->string('commission');
            $table->string('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_shops');
    }
};
