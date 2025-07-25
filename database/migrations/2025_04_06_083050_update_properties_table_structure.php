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
        // First, drop the foreign key constraint
        Schema::table('properties', function (Blueprint $table) {
            // Dropping the foreign key for `block_id` column
            if (Schema::hasColumn('properties', 'block_id')) {
                $table->dropForeign(['block_id']);
            }
            if (Schema::hasColumn('properties', 'status_id')) {
                $table->dropForeign(['status_id']);
            }
        });

        Schema::table('properties', function (Blueprint $table) {
            // Drop old columns
            $table->dropColumn([
                'code',
                'block_id',
                'description',
                'sell_price',
                'discount',
                'status_id',
                'area'
            ]);

            // Add foreign key for property_type_id
            $table->foreignId('property_type_id')
                ->nullable()
                ->constrained('property_types')
                ->onDelete('set null')
                ->after('id');

            // Add new columns
            $table->text('address')->nullable()->after('name');
            $table->unsignedInteger('number_of_floors')->nullable()->after('address');
            $table->decimal('latitude', 10, 7)->nullable()->after('number_of_floors');
            $table->decimal('longitude', 10, 7)->nullable()->after('latitude');
            $table->string('contact_person')->nullable()->after('longitude');
            $table->string('contact_number')->nullable()->after('contact_person');
        });
    }

    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            if (Schema::hasColumn('properties', 'property_type_id')) {
                $table->dropForeign(['property_type_id']);
            }
        });

        Schema::table('properties', function (Blueprint $table) {
            // Rollback new columns
            $table->dropColumn([
                'address',
                'number_of_floors',
                'latitude',
                'longitude',
                'contact_person',
                'contact_number',
                'property_type_id',
            ]);

            // Optionally re-add old columns (depends if you're doing hard replacement or reversible)
            $table->foreignId('block_id')->constrained('blocks')->onDelete('cascade');
            $table->string('code', 1)->unique()->nullable();
            $table->text('description')->nullable();
            $table->decimal('sell_price', 12, 2)->default(0.00);
            $table->decimal('discount', 12, 2)->default(0.00);
            $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('set null');
            $table->float('area')->nullable();
        });
    }
};
