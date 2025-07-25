<?php

namespace Database\Factories;

use App\Models\Block;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'number_of_floors' => $this->faker->randomDigitNotNull(),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'contact_person' => $this->faker->name(),
            'contact_number' => $this->faker->e164PhoneNumber(),
            'length' => $this->faker->numberBetween(500, 1000),
            'wide' => $this->faker->numberBetween(500, 1000),
            'property_type_id' => PropertyType::factory(),
        ];
    }
}
