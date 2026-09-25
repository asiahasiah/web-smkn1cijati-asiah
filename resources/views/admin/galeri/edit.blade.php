<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Galeri - Admin Panel</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@600;700;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --sidebar-bg: #1E2153;
            --sidebar-bg-deep: #161A42;
            --sidebar-active: #3B4CCB;
            --sidebar-text: #B6BBEA;
            --sidebar-text-dim: #8489BE;

            --content-bg: #F5F6FA;
            --ink: #1E2153;
            --muted: #6B7280;
            --line: #E7E9F2;

            --green: #22B36B;
            --green-dark: #1B9A5B;

            --blue: #3B4CCB;
            --red: #D14343;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: var(--content-bg);
            color: var(--ink);
            display: flex;
            min-height: 100vh;
        }

        h1, h2, h3, .brand-font { font-family: 'Sora', 'Inter', Arial, sans-serif; }

        /* SIDEBAR (sama seperti index) */
        .sidebar {
            width: 270px;
            flex-shrink: 0;
            background: linear-gradient(180deg, var(--sidebar-bg) 0%, var(--sidebar-bg-deep) 100%);
            color: #fff;
            padding: 26px 18px;
            min-height: 100vh;
        }
        .sidebar-brand { font-weight: 700; font-size: 17px; margin-bottom: 2px; }
        .sidebar-sub { color: var(--sidebar-text-dim); font-size: 12.5px; margin-bottom: 26px; }
        .sidebar-section {
            color: var(--sidebar-text-dim);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .6px;
            text-transform: uppercase;
            margin: 20px 10px 8px;
        }
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--sidebar-text);
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 500;
            padding: 10px 12px;
            border-radius: 10px;
            margin-bottom: 3px;
            transition: .15s;
        }
        .sidebar-link i { font-size: 16px; width: 18px; }
        .sidebar-link:hover { background: rgba(255,255,255,.06); color: #fff; }
        .sidebar-link.active {
            background: var(--sidebar-active);
            color: #fff;
        }
        .sidebar-link.logout { color: #F2A6A6; margin-top: 6px; }
        .sidebar-link.logout:hover { background: rgba(242,166,166,.1); color: #fff; }

        /* MAIN */
        .main { flex: 1; min-width: 0; padding: 28px 36px 50px; }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }
        .topbar-title { font-weight: 600; font-size: 15px; color: var(--ink); }
        .admin-chip { display: flex; align-items: center; gap: 10px; }
        .admin-chip .name { font-weight: 600; font-size: 14px; line-height: 1.2; }
        .admin-chip .role { font-size: 12px; color: var(--muted); }
        .admin-avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: var(--blue);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        /* PAGE HEAD */
        .page-head { margin-bottom: 24px; }
        .page-head h1 { font-size: 26px; font-weight: 800; margin: 0 0 6px; }
        .page-head p { margin: 0; color: var(--muted); font-size: 14.5px; }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--muted);
            text-decoration: none;
            font-size: 13.5px;
            font-weight: 500;
            margin-bottom: 14px;
        }
        .btn-back:hover { color: var(--ink); }

        /* FORM CARD */
        .form-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid var(--line);
            padding: 28px;
            max-width: 720px;
        }

        .form-group { margin-bottom: 20px; }
        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 13.5px;
            margin-bottom: 7px;
            color: var(--ink);
        }
        .form-group .hint {
            font-size: 12.5px;
            color: var(--muted);
            margin-top: 5px;
        }

        .form-control {
            width: 100%;
            padding: 11px 14px;
            border-radius: 10px;
            border: 1px solid var(--line);
            font-size: 14.5px;
            font-family: inherit;
            color: var(--ink);
            background: #FAFBFD;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--blue);
            background: #fff;
        }
        textarea.form-control { resize: vertical; min-height: 100px; }

        .file-drop {
            border: 2px dashed var(--line);
            border-radius: 12px;
            padding: 26px 18px;
            text-align: center;
            background: #FAFBFD;
            cursor: pointer;
            transition: .15s;
        }
        .file-drop:hover { border-color: var(--blue); background: #F3F5FF; }
        .file-drop i { font-size: 28px; color: var(--blue); display: block; margin-bottom: 8px; }
        .file-drop span { font-size: 13.5px; color: var(--muted); }
        .file-drop input[type="file"] { display: none; }

        #preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
            gap: 10px;
            margin-top: 14px;
        }
        #preview-grid img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid var(--line);
        }

        /* FOTO LAMA */
        .existing-photos {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
            gap: 10px;
            margin-bottom: 8px;
        }
        .existing-photo {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid var(--line);
        }
        .existing-photo img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            display: block;
        }
        .existing-photo form {
            position: absolute;
            top: 4px;
            right: 4px;
            margin: 0;
        }
        .existing-photo button {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: none;
            background: rgba(209, 67, 67, 0.9);
            color: #fff;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        .existing-photo button:hover { background: var(--red); }

        .form-actions {
            display: flex;
            gap: 10px;
            margin-top: 26px;
        }

        .btn-submit {
            background: var(--green);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 14.5px;
            cursor: pointer;
        }
        .btn-submit:hover { background: var(--green-dark); }

        .btn-cancel {
            background: #F0F1F6;
            color: var(--ink);
            border: none;
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 14.5px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        .btn-cancel:hover { background: #E4E6F0; }

        .error-text {
            color: var(--red);
            font-size: 12.5px;
            margin-top: 6px;
        }

        @media (max-width: 900px) {
            .sidebar { display: none; }
            .main { padding: 20px; }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-brand">SMKN 1 Cijati</div>
        <div class="sidebar-sub">Admin Panel</div>

        <div class="sidebar-section">Menu Utama</div>
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <div class="sidebar-section">Konten</div>
        <a href="{{ route('admin.berita.index') }}" class="sidebar-link">
            <i class="bi bi-newspaper"></i> Berita
        </a>
        <a href="{{ route('admin.galeri.index') }}" class="sidebar-link active">
            <i class="bi bi-images"></i> Galeri
        </a>
        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="sidebar-link">
            <i class="bi bi-trophy"></i> Ekstrakurikuler
        </a>

        <div class="sidebar-section">Data Sekolah</div>
        <a href="{{ route('admin.guru.index') }}" class="sidebar-link">
            <i class="bi bi-person-badge"></i> Guru
        </a>
        <a href="{{ route('admin.jurusan.index') }}" class="sidebar-link">
            <i class="bi bi-signpost-split"></i> Jurusan
        </a>
        <a href="{{ route('admin.fasilitas.index') }}" class="sidebar-link">
            <i class="bi bi-building"></i> Fasilitas
        </a>

        <div class="sidebar-section">Akun</div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-link logout" style="background:none;border:none;width:100%;text-align:left;">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <div class="topbar">
            <div class="topbar-title">Edit Galeri</div>
            <div class="admin-chip">
                <div style="text-align:right;">
                    <div class="name">Admin</div>
                    <div class="role">Admin</div>
                </div>
                <div class="admin-avatar">A</div>
            </div>
        </div>

        <a href="{{ route('admin.galeri.index') }}" class="btn-back">
            <i class="bi bi-arrow-left"></i> Kembali ke Kelola Galeri
        </a>

        <div class="page-head">
            <h1>Edit Galeri</h1>
            <p>Perbarui informasi dan foto kegiatan "{{ $galeri->judul }}".</p>
        </div>

        <div class="form-card">

            <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- JUDUL -->
                <div class="form-group">
                    <label for="judul">Judul Kegiatan</label>
                    <input
                        type="text"
                        name="judul"
                        id="judul"
                        class="form-control"
                        value="{{ old('judul', $galeri->judul) }}"
                        required
                    >
                    @error('judul')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- DESKRIPSI -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea
                        name="deskripsi"
                        id="deskripsi"
                        class="form-control"
                    >{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- TANGGAL -->
                <div class="form-group">
                    <label for="tanggal">Tanggal Kegiatan</label>
                    <input
                        type="date"
                        name="tanggal"
                        id="tanggal"
                        class="form-control"
                        value="{{ old('tanggal', $galeri->tanggal ? \Carbon\Carbon::parse($galeri->tanggal)->format('Y-m-d') : '') }}"
                        style="max-width: 220px;"
                    >
                    @error('tanggal')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- FOTO YANG SUDAH ADA -->
                @if($galeri->fotos->isNotEmpty())
                    <div class="form-group">
                        <label>Foto Saat Ini</label>

                        <div class="existing-photos">
                            @foreach($galeri->fotos as $foto)
                                <div class="existing-photo">
                                    <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto galeri">

                                    <form
                                        action="{{ route('admin.galeri.foto.destroy', $foto->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Hapus foto ini?');"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" title="Hapus foto ini">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>

                        <div class="hint">Klik tombol silang untuk menghapus foto tertentu.</div>
                    </div>
                @endif

                <!-- TAMBAH FOTO BARU -->
                <div class="form-group">
                    <label for="foto">Tambah Foto Baru (opsional)</label>

                    <label class="file-drop" for="foto">
                        <i class="bi bi-cloud-arrow-up"></i>
                        <span>Klik untuk pilih foto tambahan (boleh lebih dari satu)</span>
                    </label>

                    <input
                        type="file"
                        name="foto[]"
                        id="foto"
                        accept="image/jpeg,image/jpg,image/png,image/webp"
                        multiple
                        onchange="previewFoto(this)"
                    >

                    <div class="hint">Foto baru akan ditambahkan, foto lama tidak otomatis terhapus.</div>

                    @error('foto')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                    @error('foto.*')
                        <div class="error-text">{{ $message }}</div>
                    @enderror

                    <div id="preview-grid"></div>
                </div>

                <!-- ACTIONS -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        <i class="bi bi-check-circle"></i> Simpan Perubahan
                    </button>
                    <a href="{{ route('admin.galeri.index') }}" class="btn-cancel">
                        Batal
                    </a>
                </div>

            </form>

        </div>

    </main>

    <script>
        function previewFoto(input) {
            var grid = document.getElementById('preview-grid');
            grid.innerHTML = '';

            if (input.files) {
                Array.from(input.files).forEach(function (file) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        grid.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                });
            }
        }
    </script>

</body>
</html>