<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();


        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);
    }
}
