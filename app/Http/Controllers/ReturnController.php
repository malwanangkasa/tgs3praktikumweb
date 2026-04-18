<?php

namespace App\Http\Controllers;

use App\Models\ReturnModel;
use App\Models\LoanDetail;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function index()
    {
        $returns = ReturnModel::with('loanDetail')->get();

        return view(
            'returns.index',
            compact('returns')
        );
    }

    public function create()
    {
        $loanDetails = LoanDetail::all();

        return view(
            'returns.create',
            compact('loanDetails')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'loan_detail_id' => 'required',
            'charge' => 'required',
            'amount' => 'required'
        ]);

        ReturnModel::create([
            'loan_detail_id' => $request->loan_detail_id,
            'charge' => $request->charge,
            'amount' => $request->amount
        ]);

        return redirect()->route('returns.index');
    }

    public function edit(ReturnModel $return)
    {
        $loanDetails = LoanDetail::all();

        return view(
            'returns.edit',
            compact('return', 'loanDetails')
        );
    }

    public function update(Request $request, ReturnModel $return)
    {
        $return->update([
            'loan_detail_id' => $request->loan_detail_id,
            'charge' => $request->charge,
            'amount' => $request->amount
        ]);

        return redirect()->route('returns.index');
    }

    public function destroy(ReturnModel $return)
    {
        $return->delete();

        return redirect()->route('returns.index');
    }
}