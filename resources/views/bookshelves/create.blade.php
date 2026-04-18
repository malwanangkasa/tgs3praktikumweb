@extends('layouts.app')

@section('content')

<h3>
    Tambah Bookshelf
</h3>


<form action="{{ route('bookshelves.store') }}"
      method="POST">

    @csrf


    <div class="mb-3">

        <label class="form-label">

            Code

        </label>

        <input type="text"
               name="code"
               class="form-control"
               required>

    </div>


    <div class="mb-3">

        <label class="form-label">

            Name

        </label>

        <input type="text"
               name="name"
               class="form-control"
               required>

    </div>


    <button class="btn btn-success">

        Simpan

    </button>

    <a href="{{ route('bookshelves.index') }}"
       class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection