@extends('layouts.app')

@section('content')

<h3>Data Returns</h3>

<a href="{{ route('returns.create') }}"
   class="btn btn-primary mb-3">

   + Tambah Return

</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Loan Detail</th>
            <th>Charge</th>
            <th>Amount</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($returns as $return)

        <tr>

            <td>{{ $return->id }}</td>

            <td>
                {{ $return->loanDetail->id }}
            </td>

            <td>{{ $return->charge }}</td>

            <td>{{ $return->amount }}</td>

            <td>

                <a href="{{ route('returns.edit', $return->id) }}"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <form action="{{ route('returns.destroy', $return->id) }}"
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