<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;


    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'project_name' => fake()->sentence(3),
            'description' => fake()->paragraph,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'status' => fake()->randomElement(['pending', 'finished', 'closed']),
            'location' => fake()->city,
            'beneficiaries' => fake()->numberBetween(1, 100),
            'is_annual' => fake()->boolean,
            'activity_id' => null,
        ];
    }
}

