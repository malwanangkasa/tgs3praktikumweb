<?php

namespace App\Http\Controllers;

use App\Models\LoanDetail;
use App\Models\Loan;
use App\Models\Book;
use Illuminate\Http\Request;

class LoanDetailController extends Controller
{
    public function index()
    {
        $loanDetails = LoanDetail::with('loan', 'book')->get();

        return view(
            'loan_details.index',
            compact('loanDetails')
        );
    }

    public function create()
    {
        $loans = Loan::all();
        $books = Book::all();

        return view(
            'loan_details.create',
            compact('loans', 'books')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'loan_id' => 'required',
            'book_id' => 'required'
        ]);

        LoanDetail::create([
            'loan_id'  => $request->loan_id,
            'book_id'  => $request->book_id,
            'is_return'=> 0
        ]);

        return redirect()->route('loan-details.index');
    }

    public function edit(LoanDetail $loanDetail)
    {
        $loans = Loan::all();
        $books = Book::all();

        return view(
            'loan_details.edit',
            compact('loanDetail', 'loans', 'books')
        );
    }

    public function update(Request $request, LoanDetail $loanDetail)
    {
        $loanDetail->update([
            'loan_id'   => $request->loan_id,
            'book_id'   => $request->book_id,
            'is_return' => $request->is_return
        ]);

        return redirect()->route('loan-details.index');
    }

    public function destroy(LoanDetail $loanDetail)
    {
        $loanDetail->delete();

        return redirect()->route('loan-details.index');
    }
}