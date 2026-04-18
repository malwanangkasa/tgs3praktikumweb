<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Bookshelf;
use App\Models\Book;
use App\Models\Loan;
use App\Models\LoanDetail;
use App\Models\ReturnModel;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanDetailController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return redirect()->route('users.index');
});

Route::get('/users', function () {

    $users = \App\Models\User::all();

    return view('users.index', compact('users'));

});
Route::resource('users', UserController::class);


Route::get('/categories', function () {
    return redirect()->route('categories.index');
});



Route::get('/bookshelves', function () {
    return Bookshelf::all();
});

Route::resource(
    'bookshelves',
    BookshelfController::class
);


Route::get('/books', function () {

    $books = \App\Models\Book::with([
        'category',
        'bookshelf'
    ])->get();

    return view('books.index', compact('books'));

});

Route::resource(
    'books',
    BookController::class
);


Route::get('/loans', function () {

    $loans = \App\Models\Loan::with('user')->get();

    return view('loans.index', compact('loans'));

});

Route::resource(
    'loans',
    LoanController::class
);


Route::get('/loan-details', function () {
    return LoanDetail::with(['book','loan'])->get();
});



Route::get('/returns', function () {
    return ReturnModel::with('loanDetail')->get();
});
Route::resource(
    'returns',
    ReturnController::class
);


Route::resource('categories', CategoryController::class);
Route::resource('bookshelves', BookshelfController::class);
Route::resource('loan-details', LoanDetailController::class);