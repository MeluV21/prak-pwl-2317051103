@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="card shadow-lg border-0 rounded-3">
    <div class="card-header bg-lilac text-white">
      <h4>Edit Mata Kuliah</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('matakuliah.update', $matkul->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
          <input type="text" name="nama_mk" id="nama_mk" class="form-control" value="{{ $matkul->nama_mk }}">
        </div>

        <div class="mb-3">
          <label for="sks" class="form-label">SKS</label>
          <input type="number" name="sks" id="sks" class="form-control" value="{{ $matkul->sks }}">
        </div>

        <button type="submit" class="btn btn-lilac">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection
