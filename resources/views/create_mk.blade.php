@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-lilac text-white">
            <h4 class="mb-0">Tambah Mata Kuliah</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" id="nama_mk" class="form-control" placeholder="Masukkan nama mata kuliah" required>
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="number" name="sks" id="sks" class="form-control" placeholder="Masukkan jumlah SKS" min="1" max="6" required>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-lilac px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
