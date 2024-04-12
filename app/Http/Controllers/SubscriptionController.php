<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subs = Subscription::all();
        return view('admin.AllSubs', compact('subs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addSub");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'name' => 'required|string',
            'session_count' => 'required|integer',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $subscription = new Subscription([
            'name' => $validatedData['name'],
            'session_count' => $validatedData['session_count'],
            'price' => $validatedData['price'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
        ]);

        $subscription->save();
        return redirect()->route('subscription.index')->with('success', 'Subscription added successfully');
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
        $subscription = Subscription::findOrFail($id);

        return view('admin.editSub', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'session_count' => 'required|integer',
            'price' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $subscription = Subscription::findOrFail($id);

        $subscription->update($validatedData);

        return redirect()->route('subscription.index')->with('success', 'Subscription updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->delete();

        return redirect()->route('subscription.index')->with('success', 'Subscription deleted successfully');
    }
    
}
