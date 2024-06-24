<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 50; $i++)
        {
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => $faker->unique()->numberBetween(2602000000, 2602999999),
                'tanggal_lahir' => $faker->date,
                'ipk' => $faker->randomFloat(2, 2.75, 4.00),
            ]);
        }
    }
}
