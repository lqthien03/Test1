<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesList extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Asus', 'slug' => 'asus', 'is_active' => true],
            ['name' => 'Acer', 'slug' => 2, 'is_active' => true],
            ['name' => 'Lenovo', 'slug' => 3, 'is_active' => true],
            ['name' => 'MSI', 'slug' => 4, 'is_active' => true],
            ['name' => 'HP', 'slug' => 5, 'is_active' => false],
            ['name' => 'Dell', 'slug' => 6, 'is_active' => true],
            ['name' => 'Apple', 'slug' => 7, 'is_active' => true],
        ]);
    }
}
