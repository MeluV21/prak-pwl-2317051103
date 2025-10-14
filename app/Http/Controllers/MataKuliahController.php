<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $matkul = MataKuliah::query()
            ->when($search, function ($query, $search) {
                // cari berdasarkan nama mata kuliah (kolom di DB: nama_mk)
                $query->where('nama_mk', 'ILIKE', "%{$search}%");
            })
            ->orderBy('nama_mk')   // urutkan berdasarkan nama_mk (bukan 'nama')
            ->paginate(8);         // atau ->get() kalau tidak mau pagination

        return view('list_mk', compact('matkul'));
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Tambah Mata Kuliah']);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        // Simpan data ke database
        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        // Redirect balik ke halaman daftar matkul
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $matkul = MataKuliah::findOrFail($id);
        return view('edit_mk', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $matkul = MataKuliah::findOrFail($id);
        $matkul->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        MataKuliah::findOrFail($id)->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }




}
