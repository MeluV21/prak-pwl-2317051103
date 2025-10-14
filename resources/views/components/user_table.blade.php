<table class="table table-striped table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><strong>{{ $user->name }}</strong></td>
                <td><span class="badge bg-lilac text-dark">{{ $user->nim }}</span></td>
                <td>{{ $user->kelas }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm rounded-pill">
                        ✏️ Edit
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm rounded-pill"
                            onclick="return confirm('Yakin ingin menghapus pengguna ini?')">
                            🗑️ Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted py-4">
                    ⚠️ Belum ada data pengguna
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
