<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptions = [
            [
                'name' => 'Subscription 1',
                'session_count' => 10,
                'price' => 500.00,
                'type' => 'Monthly',
            ],
            [
                'name' => 'Trimester Subscription',
                'session_count' => 30,
                'price' => 79.99,
                'type' => 'Trimester',
        
            ],
            [
                'name' => 'Semester Subscription',
                'session_count' => 60,
                'price' => 149.99,
                'type' => 'Semester',
            ],
            [
                'name' => 'Annual Subscription',
                'session_count' => 120,
                'price' => 249.99,
                'type' => 'Annual',
            ],
           
        ];
        DB::table('subscriptions')->insert($subscriptions);
    }
}
