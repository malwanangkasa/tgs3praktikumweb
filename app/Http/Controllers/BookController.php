<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::with([
            'category',
            'bookshelf'
        ])->get();

        return view(
            'books.index',
            compact('books')
        );
    }

    public function create()
    {
        $categories = Category::all();
        $bookshelves = Bookshelf::all();

        return view(
            'books.create',
            compact(
                'categories',
                'bookshelves'
            )
        );
    }




    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'publisher' => 'required',
            'city' => 'required',
            'bookshelf_id' => 'required',
            'category_id' => 'required'
        ]);

        Book::create([

            'code'           => $request->code,
            'name'           => $request->name,
            'author'         => $request->author,
            'year'           => $request->year,
            'publisher'      => $request->publisher,
            'city'           => $request->city,
            'cover'          => null,
            'category_id'    => $request->category_id,
            'bookshelf_id'   => $request->bookshelf_id
    
        ]);
    
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        $bookshelves = Bookshelf::all();

        return view(
            'books.edit',
            compact(
                'book',
                'categories',
                'bookshelves'
            )
        );
    }



    public function update(
        Request $request,
        Book $book
    )
    {
        $book->update($request->all());

        return redirect()
            ->route('books.index');
    }



    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index');
    }
}