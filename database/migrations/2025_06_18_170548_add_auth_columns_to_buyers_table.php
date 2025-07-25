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
        Schema::table('buyers', function (Blueprint $table) {
            $table->string('password')->after('email'); // Adjust position as needed
            $table->timestamp('email_verified_at')->nullable()->after('password');
            $table->timestamp('phone_verified_at')->nullable()->after('email_verified_at');
            $table->rememberToken()->after('phone_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buyers', function (Blueprint $table) {
            $table->dropColumn(['password', 'email_verified_at', 'phone_verified_at', 'remember_token']);
        });
    }
};
