<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{

    public function index()
    {
        $loans = Loan::with('user')->get();

        return view(
            'loans.index',
            compact('loans')
        );
    }

    public function create()
    {
        $users = User::all();
        return view(
            'loans.create',
            compact('users')
        );
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_npm' => 'required',
            'loan_at'  => 'required'
        ]);

        Loan::create([
            'user_npm' => $request->user_npm,
            'loan_at'  => $request->loan_at,
            'return_at'=> $request->return_at
        ]);

        return redirect()

            ->route('loans.index');
    }

    public function edit(Loan $loan)
    {
        $users = User::all();
        return view(
            'loans.edit',
            compact(
                'loan',
                'users'
            )
        );
    }

    public function update(Request $request, Loan $loan)
    {
        $loan->update([

            'user_npm' => $request->user_npm,
            'loan_at'  => $request->loan_at,
            'return_at'=> $request->return_at
        ]);

        return redirect()

            ->route('loans.index');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()

            ->route('loans.index');
    }
}