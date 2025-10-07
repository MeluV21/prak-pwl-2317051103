<nav class="navbar navbar-expand-lg navbar-dark bg-lilac shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">📘 PWL Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
          <a class="nav-link btn btn-outline-dark rounded-pill px-3 py-1" href="{{ route('matakuliah.create') }}">+ Tambah Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-dark rounded-pill px-3 py-1" href="{{ route('matakuliah.index') }}">📋 Daftar Mata Kuliah</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
