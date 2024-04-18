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
            [
                'title' => 'Category 1',
                'description' => 'Description for Category 1',
                'img' => 'category1.jpg',
            ],
            [
                'title' => 'Category 2',
                'description' => 'Description for Category 2',
                'img' => 'category2.jpg',
            ],
           
        ];
        DB::table('category')->insert($categories);
    }
    
}
