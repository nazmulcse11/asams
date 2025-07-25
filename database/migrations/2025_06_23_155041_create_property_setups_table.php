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
        Schema::create('property_setups', function (Blueprint $table) {
            $table->id();
            $table->boolean('enable_area')->default(false);
            $table->boolean('enable_block')->default(false);
            $table->boolean('enable_unit')->default(false);
            $table->boolean('enable_address_info')->default(false);
            $table->boolean('enable_contact_info')->default(false);
            $table->boolean('enable_gmaps')->default(false);
            $table->boolean('img_video')->default(false);
            $table->boolean('property_type')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_setups');
    }
};
