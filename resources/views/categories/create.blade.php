@extends('layouts.app')

@section('content')

<h3>
    Tambah Category
</h3>

<!-- FORM CREATE -->

<form action="{{ route('categories.store') }}"
      method="POST">

    @csrf

    <!-- INPUT CATEGORY -->

    <div class="mb-3">

        <label class="form-label">

            Nama Category

        </label>

        <input type="text"
               name="category"
               class="form-control"
               placeholder="Masukkan nama category"
               required>

    </div>


    <!-- BUTTON -->

    <div>

        <button type="submit"
                class="btn btn-success">

            Simpan

        </button>

        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

</form>

@endsection