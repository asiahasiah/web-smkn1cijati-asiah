<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Siswa - SMK N 1 CIJATI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">SMK N 1 CIJATI</a>
            <a class="btn btn-light btn-sm" href="/guru">Data Guru</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center fw-bold mb-4">Data Siswa</h2>
        <table class="table table-bordered table-striped">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($siswas as $index => $siswa)
                <tr class="text-center">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                </tr>
                @empty
                <tr><td colspan="4" class="text-center">Data siswa kosong</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>