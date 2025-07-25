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
            $table->boolean('security_deposit_paid')->default(false)->after('security_money');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agent_units', function (Blueprint $table) {
            $table->dropColumn('security_deposit_paid');
        });
    }
};
