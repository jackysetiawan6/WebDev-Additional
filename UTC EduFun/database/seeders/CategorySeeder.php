<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Interactive Multimedia', 'course' => 'Human and Computer Interaction'],
            ['name' => 'Interactive Multimedia', 'course' => 'User Experience'],
            ['name' => 'Interactive Multimedia', 'course' => 'User Experience for Digital Immersive Technology'],
            ['name' => 'Software Engineering', 'course' => 'Pattern Software Design'],
            ['name' => 'Software Engineering', 'course' => 'Agile Software Development'],
            ['name' => 'Software Engineering', 'course' => 'Code Reengineering'],
        ];
        DB::table('categories')->insert($categories);
    }
}
