```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Tambah Data Guru
    </h2>

    {{-- Menampilkan error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">NIP</label>
            <input type="text"
                   name="nip"
                   class="form-control"
                   placeholder="Masukkan NIP guru"
                   value="{{ old('nip') }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Guru</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   placeholder="Masukkan nama guru"
                   value="{{ old('nama') }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mata Pelajaran</label>
            <input type="text"
                   name="mapel"
                   class="form-control"
                   placeholder="Masukkan mata pelajaran"
                   value="{{ old('mapel') }}"
                   required>
        </div>

        {{-- FOTO --}}
        <div class="mb-4">
            <label class="form-label">Foto Guru</label>

            <input type="file"
                   name="foto"
                   class="form-control"
                   accept="image/jpeg,image/png,image/jpg,image/webp">

            <small class="text-muted">
                Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
            </small>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('guru.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>
```
