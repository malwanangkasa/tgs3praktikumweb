@extends('layouts.app')

@section('content')

<h3 class="mb-3">
    Data Categories
</h3>

@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif


<a href="{{ route('categories.create') }}"
   class="btn btn-primary mb-3">

    + Tambah Category

</a>


<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

    <th>
        ID
    </th>

    <th>
        Category
    </th>

    <th>
        Aksi
    </th>

</tr>

</thead>


<tbody>

@foreach($categories as $category)

<tr>

    <td>

        {{ $category->id }}

    </td>

    <td>

        {{ $category->category }}

    </td>

    <td>

        <!-- Button Edit -->

        <a href="{{ route('categories.edit', $category->id) }}"
           class="btn btn-warning btn-sm">

            Edit

        </a>


        <!-- Button Delete -->

        <form action="{{ route('categories.destroy', $category->id) }}"
              method="POST"
              style="display:inline;">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger btn-sm">

                Hapus

            </button>

        </form>

    </td>

</tr>

@endforeach

</tbody>

</table>

@endsection