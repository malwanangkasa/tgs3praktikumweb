<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index',
            compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        Category::create([
            'category' => $request->category
        ]);

        return redirect()->route('categories.index');
    }


    public function edit(Category $category)
    {
        return view('categories.edit',
            compact('category'));
    }


    public function update(Request $request,
        Category $category)
    {
        $request->validate([
            'category' => 'required|max:100'
        ]);
        
        $category->update([
            'category' => $request->category
        ]);

        return redirect()->route('categories.index');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }
}