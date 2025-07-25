<?php

namespace Database\Factories;

use App\Models\Block;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'block_id' => Block::factory(),
            'number' => $this->faker->numberBetween(1, 10),
            'area' => $this->faker->numberBetween(200, 300),
            'length' => $this->faker->numberBetween(300, 400),
            'width' => $this->faker->numberBetween(100, 200),
            'total_area' => $this->faker->numberBetween(300, 400),
            'length_half_corridor' => $this->faker->numberBetween(100, 200),
            'width_full_shop' => $this->faker->numberBetween(100, 200),
        ];
    }
}
