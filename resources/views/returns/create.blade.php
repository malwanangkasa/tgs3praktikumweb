@extends('layouts.app')

@section('content')

<h3>Tambah Return</h3>

<form action="{{ route('returns.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Loan Detail</label>

        <select name="loan_detail_id"
                class="form-control">

            @foreach($loanDetails as $detail)

                <option value="{{ $detail->id }}">
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
               required>
    </div>

    <div class="mb-3">
        <label>Amount</label>

        <input type="number"
               name="amount"
               class="form-control"
               required>
    </div>

    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('returns.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection