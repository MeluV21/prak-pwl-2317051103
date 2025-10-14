@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg rounded-3 border-0">
        <div class="card-header bg-lilac text-white">
            <h4 class="mb-0">Tambah User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-lilac w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
