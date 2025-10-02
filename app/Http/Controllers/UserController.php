<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create() {
        return view('create_user', [
            'title' => 'Tambah User'
        ]);
    }

    public function store(Request $request) {
         User::create([
            'name' => $request->nama,
            'nim' => $request->npm,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('user.index');
    }

    public function index() {
        $users = User::all(); 
        return view('list_user', [
        'title' => 'Daftar User',
        'users' => $users
    ]);
    }


}
