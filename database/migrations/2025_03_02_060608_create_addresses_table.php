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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('addressable_id');   // Polymorphic relation (user, employee, agent, buyer)
            $table->string('addressable_type', 50);         // Type (model class name: User, Employee, Agent, Buyer)

            $table->foreignId("type_id")->nullable()->constrained("address_types")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('zip_code', 20)->nullable();
            $table->string('country', 100)->nullable();

            $table->boolean('is_primary')->default(false);  // Flag for primary address

            $table->timestamps();  // created_at & updated_at
            $table->softDeletes();  // Add soft deletes (deleted_at)

            // Polymorphic index for faster lookup
            $table->index(['addressable_id', 'addressable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
