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
        Schema::table('buyer_shops', function (Blueprint $table) {
            $table->decimal('booking_money', 15, 2)->default(0)->after('sell_amount');
            $table->decimal('management_fee', 15, 2)->default(0)->after('booking_money');
            $table->date('booking_date')->nullable()->after('management_fee');
            $table->foreignId("payment_type_id")->nullable()->constrained("payment_types")->nullOnDelete()->after('booking_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buyer_shops', function (Blueprint $table) {
            $table->dropForeign(['payment_type_id']);
            $table->dropColumn([
                'booking_money',
                'management_fee',
                'booking_date',
                'payment_type_id']);
        });
    }
};
