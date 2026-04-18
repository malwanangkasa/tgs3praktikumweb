@extends('layouts.app')

@section('content')

    <h3>
        Edit Book
    </h3>


    <form action="{{ route('books.update', $book->id) }}"
          method="POST">

        @csrf
        @method('PUT')


        <!-- CODE -->

        <div class="mb-3">

            <label class="form-label">

                Code

            </label>

            <input type="text"
                   name="code"
                   class="form-control"
                   value="{{ $book->code }}"
                   required>

        </div>



        <!-- NAME -->

        <div class="mb-3">

            <label class="form-label">

                Name

            </label>

            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $book->name }}"
                   required>

        </div>



        <!-- AUTHOR -->

        <div class="mb-3">

            <label class="form-label">

                Author

            </label>

            <input type="text"
                   name="author"
                   class="form-control"
                   value="{{ $book->author }}"
                   required>

        </div>



        <!-- YEAR -->

        <div class="mb-3">

            <label class="form-label">

                Year

            </label>

            <input type="number"
                   name="year"
                   class="form-control"
                   value="{{ $book->year }}"
                   required>

        </div>



        <!-- PUBLISHER -->

        <div class="mb-3">

            <label class="form-label">

                Publisher

            </label>

            <input type="text"
                   name="publisher"
                   class="form-control"
                   value="{{ $book->publisher }}"
                   required>

        </div>



        <!-- CITY -->

        <div class="mb-3">

            <label class="form-label">

                City

            </label>

            <input type="text"
                   name="city"
                   class="form-control"
                   value="{{ $book->city }}"
                   required>

        </div>



        <!-- CATEGORY DROPDOWN -->

        <div class="mb-3">

            <label class="form-label">

                Category

            </label>

            <select name="category_id"
                    class="form-control">

                @foreach($categories as $category)

                    <option value="{{ $category->id }}"

                        {{ $category->id == $book->category_id ? 'selected' : '' }}>

                        {{ $category->category }}

                    </option>

                @endforeach

            </select>

        </div>



        <!-- BOOKSHELF DROPDOWN -->

        <div class="mb-3">

            <label class="form-label">

                Bookshelf

            </label>

            <select name="bookshelf_id"
                    class="form-control">

                @foreach($bookshelves as $bookshelf)

                    <option value="{{ $bookshelf->id }}"

                        {{ $bookshelf->id == $book->bookshelf_id ? 'selected' : '' }}>

                        {{ $bookshelf->name }}

                    </option>

                @endforeach

            </select>

        </div>



        <!-- BUTTON -->

        <div>

            <button type="submit"
                    class="btn btn-primary">

                Update

            </button>

            <a href="{{ route('books.index') }}"
               class="btn btn-secondary">

                Kembali

            </a>

        </div>


    </form>

@endsection