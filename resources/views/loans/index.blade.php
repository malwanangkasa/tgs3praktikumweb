@extends('layouts.app')

@section('content')

<h3>Data Loans</h3>

<a href="{{ route('loans.create') }}"
   class="btn btn-primary mb-3">
    + Tambah Loan
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>User NPM</th>
            <th>Loan Date</th>
            <th>Return Date</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($loans as $loan)

        <tr>
            <td>{{ $loan->id }}</td>

            <td>
                {{ $loan->user->npm ?? '-' }}
            </td>

            <td>{{ $loan->loan_at }}</td>

            <td>{{ $loan->return_at }}</td>

            <td>

                <a href="{{ route('loans.edit', $loan->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('loans.destroy', $loan->id) }}"
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