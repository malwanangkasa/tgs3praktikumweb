@extends('layouts.app')

@section('content')

<h3>Edit Return</h3>

<form action="{{ route('returns.update', $return->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Loan Detail</label>

        <select name="loan_detail_id"
                class="form-control">

            @foreach($loanDetails as $detail)

                <option value="{{ $detail->id }}"
                    {{ $detail->id == $return->loan_detail_id ? 'selected' : '' }}>

                    Loan Detail - {{ $detail->id }}

                </option>

            @endforeach

        </select>
    </div>

    <div class="mb-3">
        <label>Charge</label>

        <input type="number"
               name="charge"
               class="form-control"
               value="{{ $return->charge }}">
    </div>

    <div class="mb-3">
        <label>Amount</label>

        <input type="number"
               name="amount"
               class="form-control"
               value="{{ $return->amount }}">
    </div>

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('returns.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection