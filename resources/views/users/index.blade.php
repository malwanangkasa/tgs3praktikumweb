@extends('layouts.app')

@section('content')

<h3>Data Users</h3>

<a href="{{ route('users.create') }}"
   class="btn btn-primary mb-3">
    + Tambah User
</a>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>first name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)

        <tr>
            <td>{{ $user->npm }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>

            <td>

                <a href="{{ route('users.edit', $user->npm) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('users.destroy', $user->npm) }}"
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