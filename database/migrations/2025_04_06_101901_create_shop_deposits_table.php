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
        Schema::create('shop_deposits', function (Blueprint $table) {
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->foreignId('agent_unit_id')->constrained('agent_units')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->date('added_date');
            $table->foreignId('added_by')->constrained('users')->onDelete('cascade'); // Assuming 'users' table holds admins
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_deposits');
    }
};
