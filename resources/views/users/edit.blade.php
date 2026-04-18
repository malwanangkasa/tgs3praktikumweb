@extends('layouts.app')

@section('content')

<h3>Edit User</h3>

<form action="{{ route('users.update', $user->npm) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="username"
               class="form-control"
               value="{{ $user->username }}">
    </div>

    <div class="mb-3">
        <label>First Name</label>

        <input type="text"
               name="first_name"
               class="form-control"
               value="{{ $user->first_name }}">
    </div>

    <div class="mb-3">
        <label>last name</label>

        <input type="text"
               name="last_name"
               class="form-control"
               value="{{ $user->last_name }}">
    </div>

    <div class="mb-3">
        <label>email</label>

        <input type="text"
               name="email"
               class="form-control"
               value="{{ $user->email }}">
    </div>

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('users.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection