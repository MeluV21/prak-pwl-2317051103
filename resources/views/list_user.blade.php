@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg rounded-3 border-0">
        <div class="card-header bg-lilac text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📋 Daftar Pengguna</h4>
            <a href="{{ route('user.create') }}" class="btn btn-light btn-sm">+ Tambah User</a>
        </div>
        <div class="card-body">

            {{-- Search Bar --}}
            <div class="mb-3">
                <form action="{{ route('user.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" 
                           placeholder="🔍 Cari nama atau NPM..." 
                           value="{{ request('search') }}">
                    <button class="btn btn-lilac" type="submit">Cari</button>
                </form>
            </div>

            {{-- Table User --}}
            @include('components.user_table', ['users' => $users])

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-3">
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection
