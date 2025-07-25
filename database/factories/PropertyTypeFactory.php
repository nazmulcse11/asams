<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyType>
 */
class PropertyTypeFactory extends Factory
{

    protected array $propertyTypes = [
        // Residential
        'Apartment',
        'House',
        'Condo',
        'Villa',
        'Studio',
        'Townhouse',
        'Duplex',
        'Co Living',
        'Hostel',
        'Mobile Home',

        // Commercial
        'Office',
        'Shop',
        'Mall',
        'Hotel',
        'Restaurant',
        'Co Working',
        'Clinic',
        'Showroom',
        'Business Center',

        // Industrial
        'Warehouse',
        'Factory',
        'Cold Storage',
        'Distribution Center',
        'Workshop',
        'Industrial Shed',
        'Logistics Hub',

        // Agricultural
        'Farmland',
        'Ranch',
        'Plantation',
        'Poultry Farm',
        'Fishery',
        'Timberland',

        // Special Use
        'Mixed Use',
        'School',
        'Hospital',
        'Religious',
        'Government',
        'Resort',
        'Sports Facility',
        'Event Hall',
        'Cemetery',
        'Parking Lot',
    ];


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->propertyTypes),
        ];
    }
}
