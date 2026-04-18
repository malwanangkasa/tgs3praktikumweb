@extends('layouts.app')

@section('content')

<h3>Tambah Loan Detail</h3>

<form action="{{ route('loan-details.store') }}" method="POST">
    @csrf

    <!-- LOAN -->

    <div class="mb-3">
        <label>Loan</label>

        <select name="loan_id" class="form-control">

            @foreach($loans as $loan)

                <option value="{{ $loan->id }}">
                    Loan ID - {{ $loan->id }}
                </option>

            @endforeach

        </select>
    </div>


    <!-- BOOK -->

    <div class="mb-3">
        <label>Book</label>

        <select name="book_id" class="form-control">

            @foreach($books as $book)

                <option value="{{ $book->id }}">
                    {{ $book->name }}
                </option>

            @endforeach

        </select>
    </div>


    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('loan-details.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection