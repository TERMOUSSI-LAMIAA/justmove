<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.catgList', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addCatg");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:category,title',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('imgs', 'public');
        } else {
            return redirect()->back()->with('error', 'No image file uploaded.');
        }


        // Create the category
        $category = new Category([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'img' => $imagePath,
        ]);

        // Save the category to the database
        $category->save();

        // Redirect back or to any other route
        return redirect()->route('category.index')->with('success', 'Category created successfully');
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editCatg', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category->title = $validatedData['title'];
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            if ($category->img) {
                Storage::delete($category->img);
            }
            $category->img = $request->file('image')->store('imgs', 'public');
        }
        $category->save();
        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category->sports()->count() > 0) {
            return redirect()->route('category.index')->with('error', 'Cannot delete category with existing sports. Please remove the associated sports first.');
        }
        if ($category->img) {
            Storage::delete($category->img);
        }
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
