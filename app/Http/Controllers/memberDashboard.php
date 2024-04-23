<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sport;
use App\Models\Reservation;
use App\Models\Session;
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
        $sessions = collect();
        foreach ($users as $user) {
            $userSessions = $user->sessions;
            $sessions = $sessions->concat($userSessions);
        }
        return response()->json($sessions);
    }
    public function reserveSession(Request $request)
    {//todo: check the subscription
        
        $request->validate([
            'session_id' => 'required|integer|exists:sessions,id',
        ]);

        $sessionId = $request->input('session_id');
        $user = auth()->user();

        $session = Session::find($sessionId);
        $existingReservation = Reservation::where('user_id', $user->id)
            ->where('session_id', $sessionId)
            ->exists();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'You have already reserved this session.');
        }
        $currentReservations = Reservation::where('session_id', $sessionId)->count();

        if ($currentReservations >= $session->capacity) {
            return redirect()->back()->with('error','This session is fully booked.');
        }

        $reservation = new Reservation([
            'user_id' => $user->id,
            'session_id' => $sessionId,
        ]);

        $reservation->save();
        return redirect()->back()->with('success', 'Reservation successful!');
    }

}
