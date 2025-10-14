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

            {{-- Alert Success --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" 
                    role="alert" 
                    style="background-color: #e9d5ff; color: #4a148c; border: none; font-weight: 500;">
                    🎉 {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" 
                    role="alert"
                    style="background-color: #ffe5e9; color: #b71c1c; border: none; font-weight: 500;">
                    ⚠️ {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

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
