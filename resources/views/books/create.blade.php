@extends('layouts.app')

@section('content')

    <h3>
        Tambah Book
    </h3>


    <form action="{{ route('books.store') }}"
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



        <div class="mb-3">

            <label class="form-label">
                Author
            </label>

            <input type="text"
                   name="author"
                   class="form-control"
                   required>

        </div>



        <div class="mb-3">

            <label class="form-label">
                Year
            </label>

            <input type="number"
                   name="year"
                   class="form-control"
                   required>

        </div>



        <div class="mb-3">

            <label class="form-label">
                Publisher
            </label>

            <input type="text"
                   name="publisher"
                   class="form-control"
                   required>

        </div>



        <div class="mb-3">

            <label class="form-label">
                City
            </label>

            <input type="text"
                   name="city"
                   class="form-control"
                   required>

        </div>



        <!-- CATEGORY -->

        <div class="mb-3">

            <label class="form-label">
                Category
            </label>

            <select name="category_id"
                    class="form-control">

                @foreach($categories as $category)

                    <option value="{{ $category->id }}">

                        {{ $category->category }}

                    </option>

                @endforeach

            </select>

        </div>



        <!-- BOOKSHELF -->

        <div class="mb-3">

            <label class="form-label">
                Bookshelf
            </label>

            <select name="bookshelf_id"
                    class="form-control">

                @foreach($bookshelves as $bookshelf)

                    <option value="{{ $bookshelf->id }}">

                        {{ $bookshelf->name }}

                    </option>

                @endforeach

            </select>

        </div>



        <button type="submit"
                class="btn btn-success">

            Simpan

        </button>

        <a href="{{ route('books.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>


    </form>

@endsection