<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid mt-4">
    <h2 class="mb-4">Edit Berita</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
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
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $berita->judul) }}">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $berita->kategori) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>
            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" width="200" class="mb-2 rounded">
            @else
                <p class="text-muted">Belum ada gambar</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Konten</label>
            <textarea name="isi" id="isi" rows="8" class="form-control">{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>