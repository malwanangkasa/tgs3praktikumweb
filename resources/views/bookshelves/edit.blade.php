@extends('layouts.app')

@section('content')

<h3>
    Edit Bookshelf
</h3>


<form action="{{ route('bookshelves.update', $bookshelf->id) }}"
      method="POST">

    @csrf
    @method('PUT')


    <div class="mb-3">

        <label class="form-label">

            Code

        </label>

        <input type="text"
               name="code"
               class="form-control"
               value="{{ $bookshelf->code }}"
               required>

    </div>


    <div class="mb-3">

        <label class="form-label">

            Name

        </label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ $bookshelf->name }}"
               required>

    </div>


    <button class="btn btn-primary">

        Update

    </button>

    <a href="{{ route('bookshelves.index') }}"
       class="btn btn-secondary">

        Kembali

    </a>

</form>

@endsection