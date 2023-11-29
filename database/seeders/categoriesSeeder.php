<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Kuliner'
        ]);
        Category::create([
            'category_name' => 'Fashion'
        ]);
        Category::create([
            'category_name' => 'jasa'
        ]);
    }
}
