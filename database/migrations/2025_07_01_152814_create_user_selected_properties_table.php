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
        Schema::create('user_selected_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_property_link_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            $table->unique(['user_property_link_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_selected_properties');
    }
};
