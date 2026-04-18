@extends('layouts.app')

@section('content')

    <h3>
        Data Books
    </h3>


    <a href="{{ route('books.create') }}"
       class="btn btn-primary mb-3">

        + Tambah Book

    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Bookshelf</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
            <tr>
                <td>
                    {{ $book->id }}
                </td>
                <td>
                    {{ $book->code }}
                </td>
                <td>
                    {{ $book->name }}

                </td>
                <td>
                    {{ $book->category->category ?? '-' }}
                </td>
                <td>
                    {{ $book->bookshelf->name ?? '-' }}
                </td>
                <td>
                    <!-- EDIT -->
                    <a href="{{ route('books.edit', $book->id) }}"
                       class="btn btn-warning btn-sm">

                        Edit

                    </a>


                    <!-- DELETE -->

                    <form action="{{ route('books.destroy', $book->id) }}"
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