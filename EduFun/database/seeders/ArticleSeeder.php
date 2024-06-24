<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            $writer_id = $faker->numberBetween(1, 5);
            $title = Str::ucfirst($faker->words(3, true));
            $content = $faker->paragraph(30);
            $category_id = $faker->numberBetween(1, 6);
            $image = $faker->randomElement(['006.jpg', '027.jpg', '029.jpg', '034.jpg', '035.jpg']);
            DB::table('articles')->insert([
                'writer_id' => $writer_id,
                'title' => $title,
                'content' => $content,
                'category_id' => $category_id,
                'image' => "assets/images/$image",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
