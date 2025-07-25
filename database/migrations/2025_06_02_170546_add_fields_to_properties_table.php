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
        Schema::table('properties', function (Blueprint $table) {
            $table->text("contact_designation")->nullable()->after('contact_person');
            $table->text("contact_email")->nullable()->after('contact_designation');
            $table->string("total_area")->nullable()->after('contact_number');
            $table->string("floor_size")->nullable()->after('total_area');
            $table->string("number_of_block")->nullable()->after('number_of_floors');
            $table->string("number_of_shop")->nullable()->after('number_of_block');
            $table->text("video")->nullable()->after('property_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(["contact", "contact_designation", "contact_email", "total_area", "floor_size", "number_of_block", "number_of_shop", "video"]);
        });
    }
};
