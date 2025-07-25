<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agent_id' => Agent::factory(), // Creates a related agent automatically
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'status_id' => Status::whereHas('type', function ($query) {
                    $query->where('name', 'General');
                })->inRandomOrder()->first()->id ?? null,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }

    /**
     * Indicate that the buyer is soft deleted.
     */
    public function trashed()
    {
        return $this->state(fn (array $attributes) => [
            'deleted_at' => now(),
        ]);
    }
}
