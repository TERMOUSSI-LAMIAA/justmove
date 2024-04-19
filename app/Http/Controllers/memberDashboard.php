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
}
