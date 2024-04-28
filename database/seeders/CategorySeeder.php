<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $categories = [
            [
                'title' => 'Category 1',
                'description' => 'Description for Category 1',
                'img' => 'category1.jpg',
                'created_at' => $now, 
                'updated_at' => $now, 
            ],
            [
                'title' => 'Category 2',
                'description' => 'Description for Category 2',
                'img' => 'category2.jpg',
                'created_at' => $now, 
                'updated_at' => $now, 
            ],
           
        ];
        DB::table('category')->insert($categories);
    }
    
}
