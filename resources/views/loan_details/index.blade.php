@extends('layouts.app')

@section('content')

<h3>Data Loan Detail</h3>

<a href="{{ route('loan-details.create') }}"
   class="btn btn-primary mb-3">
    + Tambah Loan Detail
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Loan ID</th>
            <th>Book</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($loanDetails as $detail)

        <tr>

            <td>{{ $detail->id }}</td>

            <td>{{ $detail->loan->id }}</td>

            <td>{{ $detail->book->name }}</td>

            <td>
                {{ $detail->is_return ? 'Returned' : 'Borrowed' }}
            </td>

            <td>

                <a href="{{ route('loan-details.edit', $detail->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('loan-details.destroy', $detail->id) }}"
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