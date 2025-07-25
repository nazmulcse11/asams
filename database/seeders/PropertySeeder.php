<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\PropertySetup;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propertySetup = PropertySetup::create([
            'enable_area'         => 1,
            'enable_block'        => 1,
            'enable_unit'         => 1,
            'enable_address_info' => 1,
            'enable_contact_info' => 1,
            'enable_gmaps'        => 1,
            'img_video'           => 1,
            'property_type'       => 1,
            'created_at'          => Carbon::now(),
            'updated_at'          => Carbon::now(),
        ]);

        Property::create([
            'property_setup_id'   => $propertySetup->id,
            'name'                => 'Default Property',
            'latitude'            => 23.8103,
            'longitude'           => 90.4125,
            'contact_person'      => 'John Doe',
            'contact_designation' => 'Manager',
            'contact_email'       => 'contact@property.com',
            'contact_number'      => '01234567890',
            'total_area'          => '5000',
            'floor_size'          => '1000',
            'length'              => 50.00,
            'wide'                => 100.00,
            'property_type_id'    => 1,
            'video'               => 'https://www.youtube.com/watch?v=demo_video',
            'created_at'          => Carbon::now(),
            'updated_at'          => Carbon::now(),
        ]);

        $this->command->info('Default property and setup created successfully.');
    }
}
