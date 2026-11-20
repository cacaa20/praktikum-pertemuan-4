<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>

    <h1>Tambah Data Mata Kuliah</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST" novalidate>        @csrf

        <label>Kode Mata Kuliah:</label>
        <input type="text" name="kode_matakuliah" maxlength="20"
            value="{{ old('kode_matakuliah') }}" required>

        <br><br>

        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matakuliah" maxlength="100"
            value="{{ old('nama_matakuliah') }}" required>

        <br><br>

        <label>Jumlah SKS:</label>
        <input type="number" name="sks" min="1" max="6"
            value="{{ old('sks') }}" required>

        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('matakuliah.index') }}">Kembali</a>

</body>
</html>