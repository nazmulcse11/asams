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
        Schema::table('agent_units', function (Blueprint $table) {
            $table->decimal('offer_amount', 10, 2)->nullable()->after('actual_sale_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agent_units', function (Blueprint $table) {
            $table->dropColumn(['offer_amount']);
        });
    }
};
