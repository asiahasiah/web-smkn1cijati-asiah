<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Galeri - Admin Panel</title>

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

            --edit-bg: #EAF1FB;
            --edit-fg: #2F6FE0;
            --edit-line: #CBDFF8;

            --del-bg: #FCEBEB;
            --del-fg: #D14343;
            --del-line: #F5C9C9;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', Arial, sans-serif;
            background: var(--content-bg);
            color: var(--ink);
            display: flex;
            min-height: 100vh;
        }

        h1,
        h2,
        h3,
        .brand-font {
            font-family: 'Sora', 'Inter', Arial, sans-serif;
        }

        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 270px;
            flex-shrink: 0;
            background: linear-gradient(
                180deg,
                var(--sidebar-bg) 0%,
                var(--sidebar-bg-deep) 100%
            );
            color: #fff;
            padding: 26px 18px;
            min-height: 100vh;
        }

        .sidebar-brand {
            font-weight: 700;
            font-size: 17px;
            margin-bottom: 2px;
        }

        .sidebar-sub {
            color: var(--sidebar-text-dim);
            font-size: 12.5px;
            margin-bottom: 26px;
        }

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

        .sidebar-link i {
            font-size: 16px;
            width: 18px;
        }

        .sidebar-link:hover {
            background: rgba(255, 255, 255, .06);
            color: #fff;
        }

        .sidebar-link.active {
            background: var(--sidebar-active);
            color: #fff;
        }

        .sidebar-link.logout {
            color: #F2A6A6;
            margin-top: 6px;
        }

        .sidebar-link.logout:hover {
            background: rgba(242, 166, 166, .1);
            color: #fff;
        }

        /* =========================
           MAIN
        ========================= */

        .main {
            flex: 1;
            min-width: 0;
            padding: 28px 36px 50px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .topbar-title {
            font-weight: 600;
            font-size: 15px;
            color: var(--ink);
        }

        .admin-chip {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-chip .name {
            font-weight: 600;
            font-size: 14px;
            line-height: 1.2;
        }

        .admin-chip .role {
            font-size: 12px;
            color: var(--muted);
        }

        .admin-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--blue);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .page-head h1 {
            font-size: 26px;
            font-weight: 800;
            margin: 0 0 6px;
        }

        .page-head p {
            margin: 0;
            color: var(--muted);
            font-size: 14.5px;
        }

        .btn-tambah {
            background: var(--green);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 11px 20px;
            font-weight: 600;
            font-size: 14.5px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .btn-tambah:hover {
            background: var(--green-dark);
            color: #fff;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 12px 16px;
            background: #E9F8F0;
            color: #19734A;
            border: 1px solid #C7EBD8;
            border-radius: 10px;
        }

        /* =========================
           TABLE CARD
        ========================= */

        .table-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid var(--line);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead th {
            text-align: left;
            font-size: 12px;
            letter-spacing: .5px;
            text-transform: uppercase;
            color: var(--muted);
            font-weight: 600;
            padding: 16px 22px;
            border-bottom: 1px solid var(--line);
            background: #FAFBFD;
        }

        tbody td {
            padding: 14px 22px;
            border-bottom: 1px solid var(--line);
            font-size: 14.5px;
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #FAFBFF;
        }

        /* =========================
           FOTO
        ========================= */

        .foto-thumb {
            width: 52px;
            height: 52px;
            border-radius: 10px;
            object-fit: cover;
            display: block;
            border: 1px solid var(--line);
        }

        .foto-kosong {
            width: 52px;
            height: 52px;
            border-radius: 10px;
            background: #EEF0F6;
            border: 1px dashed #C9CEDE;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #9AA1BE;
            font-size: 10px;
            text-align: center;
        }

        .foto-count {
            font-size: 12px;
            color: var(--muted);
            margin-top: 4px;
        }

        .judul-galeri {
            font-weight: 700;
            color: var(--ink);
        }

        .deskripsi-galeri {
            color: var(--muted);
            font-size: 13px;
            max-width: 320px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .tanggal-badge {
            display: inline-block;
            background: var(--edit-bg);
            color: var(--edit-fg);
            font-size: 12.5px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 999px;
            white-space: nowrap;
        }

        /* =========================
           AKSI
        ========================= */

        .aksi-group {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: 1px solid transparent;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-icon.edit {
            background: var(--edit-bg);
            color: var(--edit-fg);
            border-color: var(--edit-line);
        }

        .btn-icon.edit:hover {
            background: #DDEAFB;
        }

        .btn-icon.hapus {
            background: var(--del-bg);
            color: var(--del-fg);
            border-color: var(--del-line);
        }

        .btn-icon.hapus:hover {
            background: #F9DADA;
        }

        /* =========================
           EMPTY DATA
        ========================= */

        .empty-row td {
            text-align: center;
            padding: 60px 20px;
            color: var(--muted);
        }

        .empty-row i {
            font-size: 44px;
            color: #C9CEDE;
            display: block;
            margin-bottom: 10px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .sidebar {
                display: none;
            }

            .main {
                padding: 20px;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 750px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">

        <div class="sidebar-brand">
            SMKN 1 Cijati
        </div>

        <div class="sidebar-sub">
            Admin Panel
        </div>


        <!-- MENU UTAMA -->

        <div class="sidebar-section">
            Menu Utama
        </div>

        <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>


        <!-- KONTEN -->

        <div class="sidebar-section">
            Konten
        </div>

        <a href="{{ route('admin.berita.index') }}" class="sidebar-link">
            <i class="bi bi-newspaper"></i>
            Berita
        </a>

        <a href="{{ route('admin.galeri.index') }}" class="sidebar-link active">
            <i class="bi bi-images"></i>
            Galeri
        </a>

        <a href="{{ route('admin.ekstrakurikuler.index') }}" class="sidebar-link">
            <i class="bi bi-trophy"></i>
            Ekstrakurikuler
        </a>


        <!-- DATA SEKOLAH -->

        <div class="sidebar-section">
            Data Sekolah
        </div>

        <a href="{{ route('admin.guru.index') }}" class="sidebar-link">
            <i class="bi bi-person-badge"></i>
            Guru
        </a>

        {{-- MENU SISWA DIHAPUS KARENA FITUR SISWA TIDAK ADA --}}

        <a href="{{ route('admin.jurusan.index') }}" class="sidebar-link">
            <i class="bi bi-signpost-split"></i>
            Jurusan
        </a>

        <a href="{{ route('admin.fasilitas.index') }}" class="sidebar-link">
            <i class="bi bi-building"></i>
            Fasilitas
        </a>

        {{--
            Menu "Profil Sekolah" disembunyikan sementara.
            Alasan: ProfilController belum punya method adminIndex()
            dan view admin/profil/index.blade.php belum dibuat,
            sehingga saat ini klik menu ini menghasilkan error 500.
        --}}
        {{--
        <a href="{{ route('admin.profil.index') }}" class="sidebar-link">
            <i class="bi bi-bank"></i>
            Profil Sekolah
        </a>
        --}}


        <!-- AKUN -->

        <div class="sidebar-section">
            Akun
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit"
                class="sidebar-link logout"
                style="background:none;border:none;width:100%;text-align:left;">

                <i class="bi bi-box-arrow-right"></i>
                Logout

            </button>
        </form>

    </aside>


    <!-- =========================
         MAIN
    ========================= -->

    <main class="main">

        <!-- TOPBAR -->

        <div class="topbar">

            <div class="topbar-title">
                Kelola Galeri
            </div>

            <div class="admin-chip">

                <div style="text-align:right;">

                    <div class="name">
                        Admin
                    </div>

                    <div class="role">
                        Admin
                    </div>

                </div>

                <div class="admin-avatar">
                    A
                </div>

            </div>

        </div>


        <!-- PAGE HEADER -->

        <div class="page-head">

            <div>

                <h1>
                    Kelola Galeri
                </h1>

                <p>
                    Daftar kegiatan &amp; foto yang ditampilkan di galeri website sekolah.
                </p>

            </div>


            <a href="{{ route('admin.galeri.create') }}" class="btn-tambah">

                <i class="bi bi-plus-circle"></i>

                Tambah Galeri

            </a>

        </div>


        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="alert" style="margin-bottom:18px;">

                {{ session('success') }}

            </div>

        @endif


        <!-- TABLE -->

        <div class="table-card">

            <table>

                <thead>

                    <tr>

                        <th style="width:80px;">
                            Foto
                        </th>

                        <th>
                            Judul
                        </th>

                        <th>
                            Deskripsi
                        </th>

                        <th style="width:130px;">
                            Tanggal
                        </th>

                        <th style="width:110px;">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($galeris as $item)

                        <tr>

                            <!-- FOTO (ambil foto pertama sebagai thumbnail) -->

                            <td>

                                @if($item->fotos->isNotEmpty())

                                    <img
                                        src="{{ asset('storage/' . $item->fotos->first()->foto) }}"
                                        alt="{{ $item->judul }}"
                                        class="foto-thumb"
                                    >

                                    @if($item->fotos->count() > 1)
                                        <div class="foto-count">
                                            +{{ $item->fotos->count() - 1 }} foto
                                        </div>
                                    @endif

                                @else

                                    <div class="foto-kosong">
                                        Tidak ada
                                    </div>

                                @endif

                            </td>


                            <!-- JUDUL -->

                            <td>

                                <div class="judul-galeri">
                                    {{ $item->judul }}
                                </div>

                            </td>


                            <!-- DESKRIPSI -->

                            <td>

                                <div class="deskripsi-galeri">
                                    {{ $item->deskripsi ?? '-' }}
                                </div>

                            </td>


                            <!-- TANGGAL -->

                            <td>

                                @if($item->tanggal)
                                    <span class="tanggal-badge">
                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                                    </span>
                                @else
                                    -
                                @endif

                            </td>


                            <!-- AKSI -->

                            <td>

                                <div class="aksi-group">

                                    <!-- EDIT -->

                                    <a
                                        href="{{ route('admin.galeri.edit', $item->id) }}"
                                        class="btn-icon edit"
                                        title="Edit"
                                    >

                                        <i class="bi bi-pencil-square"></i>

                                    </a>


                                    <!-- HAPUS -->

                                    <form
                                        action="{{ route('admin.galeri.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus galeri {{ addslashes($item->judul) }}? Semua foto di dalamnya juga akan terhapus.');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-icon hapus"
                                            title="Hapus"
                                        >

                                            <i class="bi bi-trash-fill"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>


                    @empty

                        <tr class="empty-row">

                            <td colspan="5">

                                <i class="bi bi-images"></i>

                                Belum ada data galeri.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </main>

</body>

</html>