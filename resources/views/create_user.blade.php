@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-3 border-0">
                <div class="card-header bg-lilac text-white">
                    <h4 class="mb-0"> Buat Pengguna Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required>
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-lilac"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
