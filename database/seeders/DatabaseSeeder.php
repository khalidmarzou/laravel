<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $activities = Activity::factory(4)->create();

        User::factory(20)->create();

        Project::factory(100)->create()->each(function ($project) use ($activities) {
            if ($project->is_annual) {
                $activity = $activities->random();
                $project->activity()->associate($activity);
                $project->save();
            }
        });
    }
}
