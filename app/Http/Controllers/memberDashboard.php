<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sport;
use App\Models\Reservation;
use App\Models\Session;
use App\Models\UserSubscription;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
    {
        $request->validate([
            'session_id' => 'required|integer|exists:sessions,id',
        ]);

        $sessionId = $request->input('session_id');
        $user = auth()->user();

        $session = Session::findOrFail($sessionId);

        $latestSubscription = UserSubscription::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($latestSubscription) {
            $subscription = $latestSubscription->subscription;

            $monthsToAdd = match ($subscription->type) {
                'Monthly' => 1,
                'Trimester' => 3,
                'Semester' => 6,
                'Annual' => 12,
                default => 0,
            };

            $expirationDate = $latestSubscription->created_at->addMonths($monthsToAdd);

            if (Carbon::now() > $expirationDate) {
                return redirect()->back()->with('error', 'Your subscription has expired. Please renew before reserving.');
            }
        } else {
            return redirect()->back()->with('error', 'You must have an active subscription to reserve a session.');
        }
        $existingReservation = Reservation::where('user_id', $user->id)
            ->where('session_id', $sessionId)
            ->exists();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'You have already reserved this session.');
        }
        $currentReservations = Reservation::where('session_id', $sessionId)->count();

        if ($currentReservations >= $session->capacity) {
            return redirect()->back()->with('error', 'This session is fully booked.');
        }
        $reservation = new Reservation([
            'user_id' => $user->id,
            'session_id' => $sessionId,
        ]);

        $reservation->save();

        return redirect()->back()->with('success', 'Reservation successful!');
    }
    public function memberSession()
    {
        $user = Auth::user();
        $sessions = DB::table('reservations')
        ->join('sessions', 'reservations.session_id', '=', 'sessions.id')
        ->where('reservations.user_id', $user->id)
        ->orderBy('sessions.date', 'asc')
        ->orderBy('sessions.start_time', 'asc')
        ->select('reservations.id as reservation_id', 'sessions.*')
        ->get();
        return view('member.mySessions', compact('sessions')); 

    }
    public function cancelReserv(Request $request){
        $reservationId = $request->route('reservation');

        $reservation = Reservation::find($reservationId);

        $reservation->delete();

        return redirect()->back()->with('success', 'Reservation canceled successfully.');
    }
    
}
