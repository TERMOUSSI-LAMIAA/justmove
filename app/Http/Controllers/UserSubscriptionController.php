<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;
use App\Models\Subscription;
use Carbon\Carbon;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\DB;

class UserSubscriptionController extends Controller
{
    public function subscribeMemberForm($user_id)
    {
        $sports = Sport::all();
        $subscriptions = Subscription::all();
        return view("user.subscription.subscribeMember", compact("sports", "subscriptions", "user_id"));
    }

    // public function subscribe(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         'subscription_id' => 'required|exists:subscriptions,id',
    //         'user_id' => 'required|exists:users,id',
    //         'sport_id' => 'required|exists:sport,id',
    //     ]);

    //         $subscriptionType = Subscription::find($validatedData['subscription_id'])->type;
    // dd($validatedData['subscription_id']);

    //         $userSubscription = UserSubscription::where('user_id', $validatedData['user_id'])
    //         ->where('sport_id',$validatedData['sport_id'])
    //         ->latest('created_at')
    //         ->first();
    // dd($userSubscription);
    //         if ($userSubscription) {
    //             $subscription = $userSubscription->subscription;

    //             switch ($subscription->type) {
    //                 case 'Monthly':
    //                     $monthsToAdd = 1;
    //                     break;
    //                 case 'Trimester':
    //                     $monthsToAdd = 3;
    //                     break;
    //                 case 'Semester':
    //                     $monthsToAdd = 6;
    //                     break;
    //                 case 'Annual':
    //                     $monthsToAdd = 12;
    //                     break;
    //                 default:
    //                     $monthsToAdd = 0;
    //             }
    //             $expirationDate = $userSubscription->created_at->addMonths($monthsToAdd);
    //             if ($expirationDate > now()) {
    //                 $existingSubscription = true;
    //             } else {
    //                 $existingSubscription = false;
    //             }
    //         }else{
    //             $existingSubscription = false;
    //         }
    //         SELECT EXISTS (
    //     SELECT 1 
    //     FROM user_subscriptions 
    //     WHERE user_id = 2
    //         AND sport_id = 1
    //         AND DATE_ADD(created_at, INTERVAL 3 MONTH) > NOW()
    // ) AS existingSubscription;

    // $existingSubscription = UserSubscription::where('user_id', $validatedData['user_id'])
    //     ->where('sport_id', $validatedData['sport_id'])
    //     ->whereRaw("DATE_ADD(created_at, INTERVAL $monthsToAdd MONTH) > NOW()")
    //     ->exists();

    // $existingSubscription = DB::table('user_subscriptions')
    // ->where('user_id', $validatedData['user_id'])
    // ->where('sport_id', $validatedData['sport_id'])
    // ->whereRaw("DATE_ADD(created_at, INTERVAL $monthsToAdd MONTH) > NOW()")
    // ->exists();

    // if ($existingSubscription) {
    //     return redirect()->back()->with('error', 'You already have an active subscription for this sport.');
    // } else {

    // $userSubscription = new UserSubscription();
    // $userSubscription->subscription_id = $validatedData['subscription_id'];
    // $userSubscription->user_id = $validatedData['user_id'];
    // $userSubscription->sport_id = $validatedData['sport_id'];
    // $userSubscription->save();

    // return redirect()->back()->with('success', 'Subscription added successfully');
    // }
    // }
    public function subscribe(Request $request)
    {
        // $request->validate([
        //     'subscription_id' => 'required|integer|exists:subscriptions,id',
        //     'user_id' => 'required|integer|exists:users,id',
        //     'sport_id' => 'required|integer|exists:sports,id',
        // ]);

        $subscriptionId = $request->input('subscription_id');
        $userId = $request->input('user_id');
        $sportId = $request->input('sport_id');

        $currentDate = Carbon::now();

        $userSubscription = UserSubscription::where('user_id', $userId)
            ->where('sport_id', $sportId)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($userSubscription) {
            $subscription = $userSubscription->subscription;

            $monthsToAdd = match ($subscription->type) {
                'Monthly' => 1,
                'Trimester' => 3,
                'Semester' => 6,
                'Annual' => 12,
                default => 0,
            };

            $expirationDate = $userSubscription->created_at->addMonths($monthsToAdd);

            if ($currentDate <= $expirationDate) {
                return redirect()->back()->with('error', 'Your current subscription is still valid.');
            }
        }

        $userSubscription = new UserSubscription();
        $userSubscription->subscription_id = $subscriptionId;
        $userSubscription->user_id = $userId;
        $userSubscription->sport_id = $sportId;
        $userSubscription->save();

        return redirect()->back()->with('success', 'Subscription added successfully.');
    }
}
