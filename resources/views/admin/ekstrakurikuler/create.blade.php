<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ekstrakurikuler - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand: #4f46e5;
            --brand-dark: #4338ca;
            --brand-light: #eef2ff;
            --surface: #ffffff;
            --bg: #f4f6fb;
            --border: #e7e9f3;
            --text: #1e2233;
            --text-muted: #7c819a;
        }

        * { font-family: 'Plus Jakarta Sans', sans-serif; }

        body {
            background: var(--bg);
            color: var(--text);
        }

        .page-title {
            display: flex;
            align-items: center;
            gap: .75rem;
            margin: 0;
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: -0.02em;
        }

        .page-title .icon-wrap {
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--brand), #7c3aed);
            color: #fff;
            font-size: 1.2rem;
            box-shadow: 0 6px 16px -4px rgba(79, 70, 229, .45);
        }

        .page-subtitle {
            color: var(--text-muted);
            font-size: .9rem;
            margin-top: 2px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            color: var(--text-muted);
            text-decoration: none;
            font-size: .88rem;
            font-weight: 600;
            margin-bottom: 1.1rem;
            transition: color .15s ease;
        }

        .back-link:hover { color: var(--brand); }

        .content-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
            box-shadow: 0 10px 30px -12px rgba(30, 34, 51, .08);
            overflow: hidden;
        }

        .card-section {
            padding: 1.6rem 1.8rem;
        }

        .section-label {
            font-size: .72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .07em;
            color: var(--text-muted);
            margin-bottom: 1.1rem;
            display: flex;
            align-items: center;
            gap: .45rem;
        }

        .divider {
            height: 1px;
            background: var(--border);
        }

        .form-label {
            font-weight: 600;
            font-size: .88rem;
            margin-bottom: .4rem;
        }

        .form-control {
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: .6rem .85rem;
            font-size: .93rem;
            background: #fcfcfe;
            transition: all .15s ease;
        }

        .form-control:focus {
            background: #fff;
            border-color: #a5b4fc;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, .12);
        }

        .form-hint {
            display: block;
            color: var(--text-muted);
            font-size: .78rem;
            margin-top: .35rem;
        }

        .alert-danger {
            border: none;
            border-left: 4px solid #ef4444;
            border-radius: 12px;
            background: #fef2f2;
            color: #991b1b;
            font-size: .9rem;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: .6rem;
            padding: 1.1rem 1.8rem;
            background: #fafbfd;
            border-top: 1px solid var(--border);
        }

        .btn-soft {
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--text);
            font-weight: 600;
            padding: .55rem 1.2rem;
            border-radius: 10px;
            transition: all .15s ease;
        }

        .btn-soft:hover {
            background: #f3f4f9;
            border-color: #d7dae8;
            color: var(--text);
        }

        .btn-brand {
            background: linear-gradient(135deg, var(--brand), var(--brand-dark));
            border: none;
            color: #fff;
            font-weight: 600;
            padding: .55rem 1.4rem;
            border-radius: 10px;
            box-shadow: 0 6px 14px -4px rgba(79, 70, 229, .5);
            transition: transform .15s ease, box-shadow .15s ease;
        }

        .btn-brand:hover {
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 8px 18px -4px rgba(79, 70, 229, .55);
        }
    </style>
</head>

<body>

<div class="container py-5" style="max-width: 760px;">

    <a href="{{ route('admin.ekstrakurikuler.index') }}" class="back-link">
        <i class="bi bi-arrow-left"></i> Kembali ke daftar ekstrakurikuler
    </a>

    <div class="mb-4">
        <h2 class="page-title">
            <span class="icon-wrap"><i class="bi bi-plus-lg"></i></span>
            Tambah Ekstrakurikuler
        </h2>
        <div class="page-subtitle">Isi data ekstrakurikuler baru beserta foto dan logonya.</div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="d-flex align-items-center gap-2 fw-semibold mb-1">
                <i class="bi bi-exclamation-triangle-fill"></i>
                Periksa kembali isian berikut:
            </div>
            <ul class="mb-0 ps-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.ekstrakurikuler.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="content-card">

            <div class="card-section">
                <div class="section-label">
                    <i class="bi bi-info-circle"></i> Informasi Umum
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           placeholder="Contoh: PMR"
                           value="{{ old('nama') }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4"
                              placeholder="Deskripsi singkat kegiatan">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Jadwal</label>
                        <input type="text"
                               name="jadwal"
                               class="form-control"
                               placeholder="Contoh: Selasa, 15.00 - 17.00"
                               value="{{ old('jadwal') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Pembina</label>
                        <input type="text"
                               name="pembina"
                               class="form-control"
                               placeholder="Nama pembina"
                               value="{{ old('pembina') }}">
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="card-section">
                <div class="section-label">
                    <i class="bi bi-image"></i> Gambar
                </div>

                <div class="mb-4">
                    <label class="form-label">Foto Kegiatan</label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept="image/jpeg,image/png,image/jpg,image/webp">
                    <small class="form-hint">
                        Foto besar yang tampil di kartu. Format JPG/JPEG/PNG/WEBP, maksimal 2 MB.
                    </small>
                </div>

                <div class="mb-1">
                    <label class="form-label">Logo Ekstrakurikuler</label>
                    <input type="file"
                           name="logo"
                           class="form-control"
                           accept="image/jpeg,image/png,image/jpg,image/webp">
                    <small class="form-hint">
                        Logo/lambang kecil, ditampilkan di pojok foto. Format JPG/JPEG/PNG/WEBP, maksimal 2 MB.
                    </small>
                </div>
            </div>

            <div class="form-footer">
                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-soft">
                    Batal
                </a>

                <button type="submit" class="btn btn-brand">
                    <i class="bi bi-check-lg me-1"></i>
                    Simpan
                </button>
            </div>

        </div>

    </form>

</div>

</body>
</html>