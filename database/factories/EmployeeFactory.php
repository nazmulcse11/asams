<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * The model that this factory applies to.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->numerify('+88017########'),
            'password' => Hash::make('password'), // Default password: "password"
            'position' => $this->faker->jobTitle,
            'status_id' => Status::whereHas('type', function ($query) {
                            $query->where('name', 'General');
                        })->inRandomOrder()->first()->id ?? null,
            'remember_token' => Str::random(10),
        ];
    }
}
