@extends('layouts.app')

@section('content')

<h3>
    Edit Category
</h3>

<!-- FORM EDIT -->

<form action="{{ route('categories.update', $category->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <!-- INPUT CATEGORY -->

    <div class="mb-3">

        <label class="form-label">
            Nama Category
        </label>

        <input type="text"
               name="category"
               class="form-control"
               value="{{ $category->category }}"
               required>

    </div>

    <!-- BUTTON -->

    <div>

        <button type="submit"
                class="btn btn-primary">

            Update

        </button>

        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

</form>

@endsection