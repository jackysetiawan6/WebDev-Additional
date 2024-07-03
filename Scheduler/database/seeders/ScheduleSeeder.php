<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;
use Faker\Factory;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i <= 12; $i++) {
            $schedule = new Schedule();
            $schedule->task = $faker->sentence(6);
            $schedule->owner = $faker->name();
            $schedule->due_date = $faker->dateTimeBetween('now', '+6 month');
            $schedule->status = $faker->randomElement(['Pending', 'In Progress', 'Completed']);
            $schedule->priority = $faker->randomElement(['Low', 'Medium', 'High']);
            $schedule->notes = $faker->sentence(6);
            $schedule->budget = $faker->randomFloat(2, 1000, 10000);
            $schedule->created_at = now();
            $schedule->updated_at = now();
            $schedule->save();
        }
    }
}
