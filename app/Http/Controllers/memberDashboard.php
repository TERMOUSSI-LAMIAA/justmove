<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sport;
use Illuminate\Http\Request;

class memberDashboard extends Controller
{
    public function displayCatgs()
    {
        $catgs = Category::all();
        $sports = Sport::all();
        return view("member.displaySports", compact('catgs', 'sports'));
    }

    public function getCategorySports(Category $category)
    {
        $sports = $category->sports;
        return response()->json($sports);
    }

    public function getSportSessions(Sport $sport)
    {
        $users = $sport->users;

        // Gather all sessions for these users
        $sessions = collect(); // Using a collection to accumulate sessions

        foreach ($users as $user) {
            $userSessions = $user->sessions; // Get sessions for this user
            $sessions = $sessions->concat($userSessions); // Add to the collection
        }

        return response()->json($sessions);
    }
}
