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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'kelas' => 'required'
        ]);

        \App\Models\User::create($validated);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }



    public function edit($id) {
        $user = User::findOrFail($id);
        return view('edit_user', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'kelas' => 'required|string|max:10',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('user.index')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success', 'Data pengguna berhasil dihapus!');
    }


    public function index(Request $request) {
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
