<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita - Admin SMKN 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f8;
        }

        .form-container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        .foto-preview {
            width: 200px;
            height: 130px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">
            SMK N 1 CIJATI - Admin
        </a>
        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm">
                Logout
            </button>
        </form>
    </div>
</nav>

<div class="form-container">

    <h1 class="h4 mb-4">Edit Berita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Berita</label>
            <input
                type="text"
                name="judul"
                class="form-control"
                value="{{ old('judul', $berita->judul) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Isi Berita</label>
            <textarea
                name="isi"
                class="form-control"
                rows="8"
                required
            >{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Saat Ini</label>
            <div>
                @if ($berita->foto)
                    @php
                        $namaFoto = basename(str_replace('\\', '/', $berita->foto));
                    @endphp

                    @if (file_exists(public_path('images/berita/' . $namaFoto)))
                        <img
                            src="{{ asset('images/berita/' . $namaFoto) }}"
                            alt="{{ $berita->judul }}"
                            class="foto-preview"
                        >
                    @else
                        <p class="text-muted">Foto tidak ditemukan.</p>
                    @endif
                @else
                    <p class="text-muted">Belum ada foto.</p>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Ganti Foto (opsional)</label>
            <input
                type="file"
                name="foto"
                class="form-control"
                accept="image/*"
            >
            <div class="form-text">Kosongkan jika tidak ingin mengganti foto.</div>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>