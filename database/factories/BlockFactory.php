<?php

namespace Database\Factories;

use App\Models\Block;
use App\Models\Floor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Block>
 */
class BlockFactory extends Factory
{
    protected $model = Block::class;

    public function definition()
    {
        return [
            'name' => chr($this->faker->numberBetween(ord('A'), ord('D'))),
            'floor_id' => Floor::factory(),
            'description' => $this->faker->sentence(),
        ];
    }
}
