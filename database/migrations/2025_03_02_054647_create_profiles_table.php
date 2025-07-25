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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profileable_id');  // Polymorphic relation
            $table->string('profileable_type', 50);        // Type to detect related table (users, employees, agents, buyers)

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->unsignedBigInteger('blood_group_id')->nullable()->constrained("blood_groups")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nid', 25)->nullable();

            $table->date('date_of_birth')->nullable();
            $table->foreignId("gender_id")->nullable()->constrained("genders")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("marital_status_id")->nullable()->constrained("maritals")->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamp('last_login')->nullable();
            $table->string('last_ip', 50)->nullable();

            $table->timestamps();
            $table->softDeletes(); // Add soft deletes here

            // Polymorphic index
            $table->index(['profileable_id', 'profileable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
