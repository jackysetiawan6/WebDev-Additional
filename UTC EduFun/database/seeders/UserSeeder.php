<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            $name = $faker->name;
            $email = $faker->email;
            $job_title = $faker->jobTitle;
            $profile = $faker->randomElement(['038.jpg', '043.jpg', '078.jpg', '090.jpg', '104.jpg']);
            $password = bcrypt('password');
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'job_title' => $job_title,
                'profile' => "assets/images/$profile",
                'password' => $password,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
