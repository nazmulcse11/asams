<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Property;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AgentUnit>
 */
class AgentUnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agent_id' => Agent::factory(),
            'property_id' => Property::factory(),
            'deposit_amount' => $this->faker->randomFloat(2, 1000, 50000), // Random deposit between 1k-50k
            'deposit_status_id' => Status::whereHas('type', function ($query) {
                    $query->where('name', 'Deposit');
                })->inRandomOrder()->first()->id ?? null,
            'assigned_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'returned_at' => $this->faker->optional(0.3)->dateTimeBetween('-6 months', 'now'), // 30% chance of being set
        ];
    }
}
