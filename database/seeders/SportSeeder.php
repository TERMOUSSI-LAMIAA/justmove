<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = [
            [
                'title' => 'Sport 1',
                'description' => 'Description for Sport 1',
                'img' => 'sport1.jpg',
                'category_id' => 1, 
            ],
            [
                'title' => 'Sport 2',
                'description' => 'Description for Sport 2',
                'img' => 'sport2.jpg',
                'category_id' => 2, 
            ],
            
            
        ];
        DB::table('sport')->insert($sports);
    
    }
}
