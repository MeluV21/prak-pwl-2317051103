@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg rounded-3 border-0">
        <div class="card-header bg-lilac text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📋 Daftar Pengguna</h4>
            <a href="{{ route('user.create') }}" class="btn btn-light btn-sm">+ Tambah User</a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped table-bordered align-middle">
                <thead class="table-lilac text-white text-center" style="background-color: #b088b0;">
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 25%">Nama</th>
                        <th style="width: 20%">NPM</th>
                        <th style="width: 20%">Kelas</th>
                        <th style="width: 30%">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-bold">{{ $user->name }}</td>
                            <td><span class="badge" style="background-color:#C8A2C8;">{{ $user->nim }}</span></td>
                            <td>{{ $user->kelas }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-lilac">👁 Lihat</a>
                                <a href="#" class="btn btn-sm btn-warning">✏ Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">🗑 Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted">⚠️ Belum ada data pengguna</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
