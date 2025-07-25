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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('block_id')
                ->constrained('blocks')  // References the blocks table
                ->onDelete('cascade')    // Deletes associated shops if the block is deleted
                ->after('id');           // After the 'id' column

            $table->string('number')->notNull(); // Shop Number
            $table->float('area')->default(0); // Shop Area
            $table->float('length')->default(0); // Length of Shop
            $table->float('width')->default(0); // Width of Shop
            $table->float('total_area')->default(0); // Total Area
            $table->float('length_half_corridor')->default(0); // Length (Half of corridor)
            $table->float('width_full_shop')->default(0); // Width (Full width of shop)
            $table->timestamps();
            $table->softDeletes(); // For soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
