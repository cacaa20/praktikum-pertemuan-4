<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Jurusan</title>
</head>
<body>

    <h1>Daftar Semua Jurusan</h1>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('jurusan.create') }}">Tambah Jurusan</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Aksi</th>
        </tr>

        @forelse ($jurusans as $jurusan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jurusan->kode }}</td>
                <td>{{ $jurusan->nama }}</td>
                <td>
                    <a href="{{ url('/jurusan/' . $jurusan->id) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data jurusan.</td>
            </tr>
        @endforelse
    </table>

</body>
</html>
