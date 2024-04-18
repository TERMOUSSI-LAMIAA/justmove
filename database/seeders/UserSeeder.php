<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Lamiaa',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'type_user' => 'admin',
        ]);

        User::create([
            'name' => 'samir',
            'email' => 'samir@example.com',
            'password' => Hash::make('12345678'),
            'type_user' => 'user',
            'categorie' => 'Male', 
            'date_naissance' => '1990-01-01', 
            'photo' => 'default.jpg',
            'sport_id' => 1,
        ]);
        // User::create([
        //     'name' => 'amal',
        //     'email' => 'amal@example.com',
        //     'password' => Hash::make('12345678'),
        //     'type_user' => 'member',
        //     'categorie' => 'Female',
        //     'date_naissance' => '1999-01-01',
        //     'photo' => 'default.jpg',
        // ]);
        // User::create([
        //     'name' => 'Ahmed',
        //     'email' => 'ahmed@example.com',
        //     'password' => Hash::make('12345678'),
        //     'type_user' => 'member',
        //     'categorie' => 'Male',
        //     'date_naissance' => '1998-01-01',
        //     'photo' => 'default.jpg',
        // ]);
    }
}
