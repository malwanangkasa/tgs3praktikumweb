@extends('layouts.app')

@section('content')

<h3>Tambah User</h3>

<form action="{{ route('users.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="name"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>First Name</label>

        <input type="text"
               name="first_name"
               class="form-control"
               value="">
    </div>

    <div class="mb-3">
        <label>Last Name</label>

        <input type="text"
               name="last_name"
               class="form-control"
               placeholder="">
    </div>

    <div class="mb-3">
        <label>email</label>

        <input type="text"
               name="email"
               class="form-control"
               placeholder="">
    </div>

    <button type="submit"
            class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('users.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection