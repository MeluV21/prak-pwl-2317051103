<table class="table table-hover table-striped table-bordered align-middle">
    <thead class="table-dark text-center">
        <tr>
            <th style="width: 5%">#</th>
            <th style="width: 25%">Nama</th>
            <th style="width: 20%">NPM</th>
            <th style="width: 20%">Kelas</th>
            <th style="width: 30%">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="fw-bold">{{ $user->name }}</td>
                <td><span class="badge bg-lilac text-white">{{ $user->nim }}</span></td>
                <td>{{ $user->kelas }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-lilac">👁 Lihat</a>
                    <a href="#" class="btn btn-sm btn-warning">✏ Edit</a>
                    <a href="#" class="btn btn-sm btn-danger">🗑 Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-muted">⚠️ Belum ada data pengguna</td>
            </tr>
        @endforelse
    </tbody>
</table>
