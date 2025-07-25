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
            $table->decimal('booking_percent', 5, 2)->nullable()->after('sale_price'); // Replace 'some_column'
            $table->decimal('agree_booking_percent', 5, 2)->nullable()->after('booking_percent');
            $table->decimal('booking_amount', 15, 2)->nullable()->after('agree_booking_percent');
            $table->decimal('agree_booking_amount', 15, 2)->nullable()->after('booking_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agent_units', function (Blueprint $table) {
            $table->dropColumn([
                'booking_percent',
                'agree_booking_percent',
                'booking_amount',
                'agree_booking_amount',
            ]);
        });
    }
};
