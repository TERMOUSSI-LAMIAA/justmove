<?php

namespace Database\Seeders;

use Database\Seeders\UserSeeder;
use Database\seeders\SportSeeder;
use Database\seeders\CategorySeeder;
use Database\seeders\SubscriptionsSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([CategorySeeder::class]);
        $this->call([SportSeeder::class]);
        $this->call([ UserSeeder::class]);
      
  
        $this->call([SubscriptionsSeeder::class]);
    }
}
