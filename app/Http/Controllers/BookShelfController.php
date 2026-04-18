<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function index()
    {
        $bookshelves = Bookshelf::all();

        return view(
            'bookshelves.index',
            compact('bookshelves')
        );
    }

    public function create()
    {
        return view('bookshelves.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        Bookshelf::create([
            'code' => $request->code,
            'name' => $request->name
        ]);

        return redirect()
            ->route('bookshelves.index');
    }

    public function edit(Bookshelf $bookshelf)
    {
        return view(
            'bookshelves.edit',
            compact('bookshelf')
        );
    }

    public function update(Request $request, Bookshelf $bookshelf)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        $bookshelf->update([
            'code' => $request->code,
            'name' => $request->name
        ]);

        return redirect()
            ->route('bookshelves.index');
    }

    public function destroy(Bookshelf $bookshelf)
    {
        $bookshelf->delete();

        return redirect()
            ->route('bookshelves.index');
    }
}