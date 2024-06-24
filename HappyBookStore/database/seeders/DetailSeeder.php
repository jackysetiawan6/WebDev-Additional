<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i <= 120; $i++) {
            DB::table('details')->insert([
                'book_id' => $i,
                'author' => $faker->name(),
                'publisher' => $faker->name(),
                'year' => $faker->numberBetween(2000, 2024),
                'description' => $faker->paragraph(),
            ]);
        }
    }
}
