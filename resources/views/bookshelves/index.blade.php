@extends('layouts.app')

@section('content')

<h3>
    Data Bookshelves
</h3>

<a href="{{ route('bookshelves.create') }}"
   class="btn btn-primary mb-3">

    + Tambah Bookshelf

</a>


<table class="table table-bordered">

    <thead>

        <tr>

            <th>
                ID
            </th>

            <th>
                Code
            </th>

            <th>
                Name
            </th>

            <th>
                Aksi
            </th>

        </tr>

    </thead>


    <tbody>

        @foreach($bookshelves as $bookshelf)

        <tr>

            <td>

                {{ $bookshelf->id }}

            </td>

            <td>

                {{ $bookshelf->code }}

            </td>

            <td>

                {{ $bookshelf->name }}

            </td>

            <td>

                <!-- Button Edit -->

                <a href="{{ route('bookshelves.edit', $bookshelf->id) }}"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>


                <!-- Button Delete -->

                <form action="{{ route('bookshelves.destroy', $bookshelf->id) }}"
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