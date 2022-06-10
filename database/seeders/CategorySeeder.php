<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Animation',
            'slug' => 'animation'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);
        Category::create([
            'name' => 'Branding',
            'slug' => 'branding'
        ]);
        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);
    }
}
