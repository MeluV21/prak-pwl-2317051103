<nav class="navbar navbar-expand-lg navbar-light bg-lilac shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#">💠 PWL Project</a>

        <div class="d-flex">
            {{-- Kalau lagi di halaman USER --}}
            @if (Request::is('user*'))
                <a href="{{ route('user.create') }}" 
                   class="btn btn-light me-2 {{ Request::is('user/create') ? 'active' : '' }}">
                   + Tambah User
                </a>
                <a href="{{ route('user.index') }}" 
                   class="btn btn-light {{ Request::is('user') ? 'active' : '' }}">
                   📋 Daftar User
                </a>

            {{-- Kalau lagi di halaman MATA KULIAH --}}
            @elseif (Request::is('matakuliah*'))
                <a href="{{ route('matakuliah.create') }}" 
                   class="btn btn-light me-2 {{ Request::is('matakuliah/create') ? 'active' : '' }}">
                   + Tambah Mata Kuliah
                </a>
                <a href="{{ route('matakuliah.index') }}" 
                   class="btn btn-light {{ Request::is('matakuliah') ? 'active' : '' }}">
                   📚 Daftar Mata Kuliah
                </a>

            {{-- Default fallback kalau bukan keduanya --}}
            @else
                <a href="{{ route('user.index') }}" class="btn btn-light me-2">👥 Daftar User</a>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-light">📚 Mata Kuliah</a>
            @endif
        </div>
    </div>
</nav>
