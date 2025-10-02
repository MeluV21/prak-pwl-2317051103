<nav class="navbar navbar-expand-lg bg-lilac navbar-dark shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-white" href="{{ url('/') }}"> PrakWebLanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-flex gap-2">
        <li class="nav-item">
          <a class="btn rounded-pill px-3" style="border:2px solid #5D3A66; color:#5D3A66;" href="{{ route('user.create') }}">
            ➕ Tambah User
            </a>

        </li>
        <li class="nav-item">
          <a class= "btn rounded-pill px-3" style="border:2px solid #5D3A66; color:#5D3A66;" href="{{ route('user.index') }}">
            📋 Daftar User
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
