@extends('layouts.app')

@section('content')

<h3>Tambah Loan</h3>

<form action="{{ route('loans.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>User (NPM)</label>
        <select name="user_npm" class="form-control">
            @foreach($users as $user)
                <option value="{{ $user->npm }}">
                    {{ $user->npm }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Loan Date</label>
        <input type="date"
               name="loan_at"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Return Date</label>
        <input type="date"
               name="return_at"
               class="form-control">
    </div>

    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('loans.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection