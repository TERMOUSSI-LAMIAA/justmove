<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $sports = [
            [
                'title' => 'Sport 1',
                'description' => 'Description for Sport 1',
                'img' => 'sport1.jpg',
                'category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now, 
            ],
            [
                'title' => 'Sport 2',
                'description' => 'Description for Sport 2',
                'img' => 'sport2.jpg',
                'category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now, 
            ],
            
            
        ];
        DB::table('sport')->insert($sports);
    
    }
}
