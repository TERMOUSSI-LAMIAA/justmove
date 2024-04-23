<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{//todo:send notif to member or all members when update or delete session
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sessions = Session::all();
        $newSessions = Session::where('date', '>=', now()->toDateString())
        // ->where('start_time', '>=', now()->toTimeString())
        ->get();

        $oldSessions = Session::where('date', '<', now()->toDateString())
        // ->where('start_time', '<', now()->toTimeString())
        ->get();
      
        return view('user.session.AllSessions', compact('newSessions', 'oldSessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.session.addSession');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i |after:start_time',
            'capacity' => 'required|integer|min:1',
        ]);

        $session = new Session();
        $session->date = $validatedData['date'];
        $session->start_time = $validatedData['start_time'];
        $session->end_time = $validatedData['end_time'];
        $session->capacity = $validatedData['capacity'];
        $session->user_id = Auth::id();

        $session->save();

        return redirect()->back()->with('success', 'Session added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $session = Session::findOrFail($id);
        return view('user.session.updtSession', compact('session'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Session $session)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i:s',
            'end_time' => 'required|date_format:H:i:s|after:start_time',
            'capacity' => 'required|integer|min:1',
        ]);

        $session->date = $validatedData['date'];
        $session->start_time = $validatedData['start_time'];
        $session->end_time = $validatedData['end_time'];
        $session->capacity = $validatedData['capacity'];

        $session->save();

        return redirect()->route('session.index')->with('success', 'Session updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $session = Session::find($id);

        if ($session) {
            $session->delete();

            return redirect()->back()->with('success', 'Session deleted successfully');
        } else {
        
            return redirect()->back()->with('error', 'Session not found');
        }
    

    }
}
