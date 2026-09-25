<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ekstrakurikuler - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 mb-5" style="max-width: 700px;">

    <h2 class="mb-4">
        Edit Ekstrakurikuler
    </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.ekstrakurikuler.update', $ekskul->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ old('nama', $ekskul->nama) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="3">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text"
                           name="jadwal"
                           class="form-control"
                           value="{{ old('jadwal', $ekskul->jadwal) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text"
                           name="pembina"
                           class="form-control"
                           value="{{ old('pembina', $ekskul->pembina) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Kegiatan</label>

                    @if (!empty($ekskul->foto))
                        <div class="mb-2">
                            <img src="{{ asset('images/' . $ekskul->foto) }}"
                                 alt="Foto saat ini"
                                 style="width:100px; height:100px; object-fit:cover; border-radius:8px;">
                        </div>
                    @endif

                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/jpeg,image/png,image/jpg,image/webp">
                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto. Maksimal 2 MB.
                    </small>
                </div>

                <div class="mb-4">
                    <label class="form-label">Logo Ekstrakurikuler</label>

                    @if (!empty($ekskul->logo))
                        <div class="mb-2">
                            <img src="{{ asset('images/' . $ekskul->logo) }}"
                                 alt="Logo saat ini"
                                 style="width:100px; height:100px; object-fit:contain; background:#f1f5f9; border-radius:8px; padding:6px;">
                        </div>
                    @endif

                    <input type="file"
                           name="logo"
                           class="form-control"
                           accept="image/jpeg,image/png,image/jpg,image/webp">
                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti logo. Maksimal 2 MB.
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-secondary">
                    Batal
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>