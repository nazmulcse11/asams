<?php

namespace Database\Factories;

use App\Models\Floor;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Floor>
 */
class FloorFactory extends Factory
{
    protected $model = Floor::class;

    public function definition()
    {
        $number = $this->faker->numberBetween(1, 10);
        return [
            'number' => $number,
            'name' => "Floor $number",
            'description' => $this->faker->sentence(),
            'no_of_units' => $this->faker->randomDigitNotNull(),
            'property_id' => Property::factory(),
        ];
    }
}
