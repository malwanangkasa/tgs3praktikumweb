<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view(
            'users.index',
            compact('users')
        );
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_jurusan' => 'required',
            'angkatan'     => 'required',
            'urutan'       => 'required',
            'name'         => 'required'
        ]);

        $npm =
            $request->kode_jurusan .
            $request->angkatan .
            $request->urutan;

        User::create([
            'npm'           => $npm,
            'kode_jurusan'  => $request->kode_jurusan,
            'angkatan'      => $request->angkatan,
            'urutan'        => $request->urutan,
            'name'          => $request->name,
            'password'      => bcrypt('123456')
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view(
            'users.edit',
            compact('user')
        );
    }

    public function update(Request $request, User $user)
    {
        $npm =
            $request->kode_jurusan .
            $request->angkatan .
            $request->urutan;

        $user->update([
            'npm'           => $npm,
            'kode_jurusan'  => $request->kode_jurusan,
            'angkatan'      => $request->angkatan,
            'urutan'        => $request->urutan,
            'name'          => $request->name
        ]);

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}