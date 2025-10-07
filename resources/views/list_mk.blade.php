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
                    </tr>
                </thead>
                <tbody>
                    @forelse($matkul as $m)
                    <tr>
                        <td>{{ $m->nama_mk }}</td>
                        <td>{{ $m->sks }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="text-center text-muted">Belum ada data mata kuliah</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
