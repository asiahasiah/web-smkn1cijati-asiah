<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita - SMKN 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container py-5">

    <h1 class="mb-4">Tambah Berita</h1>

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

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Berita</label>

            <input
                type="text"
                name="judul"
                class="form-control"
                value="{{ old('judul') }}"
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
            >{{ old('isi') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Berita</label>

            <input
                type="file"
                name="foto"
                class="form-control"
                accept="image/*"
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Berita
        </button>

        <a href="{{ route('berita.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>