@extends('layouts.app')

@section('content')

<h3>Edit Loan Detail</h3>

<form action="{{ route('loan-details.update', $loanDetail->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- LOAN -->

    <div class="mb-3">
        <label>Loan</label>

        <select name="loan_id" class="form-control">

            @foreach($loans as $loan)

                <option value="{{ $loan->id }}"
                    {{ $loan->id == $loanDetail->loan_id ? 'selected' : '' }}>

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

                <option value="{{ $book->id }}"
                    {{ $book->id == $loanDetail->book_id ? 'selected' : '' }}>

                    {{ $book->name }}

                </option>

            @endforeach

        </select>
    </div>


    <!-- STATUS RETURN -->

    <div class="mb-3">
        <label>Status Return</label>

        <select name="is_return" class="form-control">

            <option value="0"
                {{ $loanDetail->is_return == 0 ? 'selected' : '' }}>
                Borrowed
            </option>

            <option value="1"
                {{ $loanDetail->is_return == 1 ? 'selected' : '' }}>
                Returned
            </option>

        </select>
    </div>


    <!-- BUTTON -->

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('loan-details.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection