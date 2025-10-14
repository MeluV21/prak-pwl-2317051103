@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-lilac text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Mata Kuliah</h4>
            <a class="btn btn-light" href="{{ route('matakuliah.create') }}">+ Tambah Mata Kuliah</a>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('matakuliah.index') }}" class="mb-3 d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari nama..." value="{{ request('search') }}">
                <button class="btn btn-lilac">Cari</button>
            </form>

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($matkul as $m)
                <tr>
                    <td>{{ $m->nama_mk }}</td>
                    <td>{{ $m->sks }}</td>
                    <td>
                    <a href="{{ route('matakuliah.edit', $m->id) }}" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada data mata kuliah</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
