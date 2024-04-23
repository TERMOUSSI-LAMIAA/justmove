<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserSubscription;

class UserSubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSubscription::create([
            'user_id' => 3,
            'subscription_id' => 1,
            'sport_id' => 1,
        ]);

        UserSubscription::create([
            'user_id' => 4,
            'subscription_id' => 2,
            'sport_id' => 2,
        ]);
    }
}
