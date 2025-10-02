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

    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::query()
            ->when($search, function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('nim', 'LIKE', "%{$search}%");
        })
        ->paginate(5); // tampilkan 5 data per halaman

        return view('list_user', compact('users'));
    }



}
