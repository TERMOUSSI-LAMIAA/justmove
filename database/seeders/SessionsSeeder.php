<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Session::create([
            'date' => '2024-04-29',
            'start_time' => '10:00:00',
            'end_time' => '11:00:00',
            'capacity' => 20,
            'user_id' => 2,
        ]);
        Session::create([
            'date' => '2024-05-09',
            'start_time' => '22:00:00',
            'end_time' => '23:00:00',
            'capacity' => 15,
            'user_id' => 2,
        ]);
    }
}
