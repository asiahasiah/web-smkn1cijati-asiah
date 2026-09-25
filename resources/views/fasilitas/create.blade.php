<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Fasilitas</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4">Tambah Fasilitas</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('fasilitas.store') }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        {{-- NAMA FASILITAS --}}
        <div class="mb-3">

            <label class="form-label">
                Nama Fasilitas
            </label>

            <input
                type="text"
                name="nama"
                class="form-control"
                placeholder="Contoh: Lapangan Sekolah"
                value="{{ old('nama') }}"
                required>

        </div>

        {{-- DESKRIPSI --}}
        <div class="mb-3">

            <label class="form-label">
                Deskripsi
            </label>

            <textarea
                name="deskripsi"
                class="form-control"
                rows="5"
                placeholder="Masukkan deskripsi fasilitas..."
                required>{{ old('deskripsi') }}</textarea>

        </div>

        {{-- FOTO --}}
        <div class="mb-3">

            <label class="form-label">
                Foto Fasilitas
            </label>

            <input
                type="file"
                name="gambar"
                class="form-control"
                accept="image/jpeg,image/png,image/jpg,image/webp">

            <small class="text-muted">
                Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
            </small>

        </div>

        {{-- TOMBOL --}}
        <a
            href="{{ route('fasilitas.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

        <button
            type="submit"
            class="btn btn-primary">

            Tambah Fasilitas

        </button>

    </form>

</div>

</body>

</html>