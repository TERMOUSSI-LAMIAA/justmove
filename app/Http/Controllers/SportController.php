<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sport;
use App\Models\Category;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports = Sport::all();
        return view('admin.sportList', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.addSport",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'category_id' => 'required|exists:category,id', 
        ]);

        $sport = new Sport();
        $sport->title = $validatedData['title'];
        $sport->description = $validatedData['description'];
        $sport->category_id = $validatedData['category_id'];

        if ($request->hasFile('image')) {
            $sport->img = $request->file('image')->store('imgs', 'public');
        }
        $sport->save();
        return redirect()->route('sport.index')->with('success', 'Sport added successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
