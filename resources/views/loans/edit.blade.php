@extends('layouts.app')

@section('content')

<h3>Edit Loan</h3>

<form action="{{ route('loans.update', $loan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- USER -->

    <div class="mb-3">
        <label>User (NPM)</label>

        <select name="user_npm" class="form-control">

            @foreach($users as $user)

                <option value="{{ $user->npm }}"
                    {{ $user->npm == $loan->user_npm ? 'selected' : '' }}>

                    {{ $user->npm }}

                </option>

            @endforeach

        </select>
    </div>


    <!-- LOAN DATE -->

    <div class="mb-3">
        <label>Loan Date</label>

        <input type="date"
               name="loan_at"
               class="form-control"
               value="{{ $loan->loan_at }}"
               required>
    </div>


    <!-- RETURN DATE -->

    <div class="mb-3">
        <label>Return Date</label>

        <input type="date"
               name="return_at"
               class="form-control"
               value="{{ $loan->return_at }}">
    </div>


    <!-- BUTTON -->

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('loans.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection