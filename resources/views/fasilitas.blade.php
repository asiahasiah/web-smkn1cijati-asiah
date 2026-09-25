<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fasilitas - SMK N 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-blue: #1B63E0;
            --brand-blue-dark: #124EB8;
            --ink: #142942;
            --amber: #F2A93B;
            --bg: #F5F8FC;
            --card-line: #E3E9F3;
            --muted: #5E6E85;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: var(--bg);
            font-family: 'Inter', Arial, sans-serif;
            color: var(--ink);
        }

        h1, h2, h3, .brand-font {
            font-family: 'Sora', 'Inter', Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: var(--brand-blue) !important;
            box-shadow: 0 2px 14px rgba(27, 99, 224, .25);
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .navbar-brand {
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            font-size: 19px;
            letter-spacing: .2px;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 40px;
            width: 40px;
            object-fit: contain;
            margin-right: 10px;
            border-radius: 50%;
            background: white;
            padding: 3px;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            font-size: 15px;
            color: rgba(255,255,255,.85) !important;
            padding: 8px 14px !important;
            border-radius: 8px;
            transition: .2s;
        }

        .navbar-nav .nav-link:hover {
            color: #fff !important;
            background: rgba(255,255,255,.12);
        }

        .navbar-nav .nav-link.active {
            color: #fff !important;
            background: rgba(255,255,255,.18);
        }

        .btn-admin-dashboard {
            background: var(--amber);
            color: var(--ink);
            border: none;
            border-radius: 10px;
            padding: 8px 16px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-admin-dashboard:hover {
            background: #e09a26;
            color: var(--ink);
        }

        .btn-logout {
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            padding: 8px 16px;
        }

        /* MODE ADMIN BAR */
        .admin-mode-bar {
            background: var(--ink);
            color: white;
            padding: 10px 0;
            border-bottom: 3px solid var(--amber);
        }

        .admin-mode-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .admin-mode-title {
            font-weight: 700;
            font-size: 14px;
        }

        .admin-mode-text {
            font-size: 13.5px;
            opacity: .85;
            margin-left: 8px;
        }

        /* HERO */
        .hero {
            position: relative;
            background:
                linear-gradient(180deg, rgba(27, 99, 224, .78), rgba(18, 78, 184, .78)),
                url("{{ asset('images/rps.jpg.jpeg') }}") center/cover;
            min-height: 340px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 4px;
            background: var(--amber);
        }

        .hero-logo {
            height: 92px;
            width: 92px;
            object-fit: contain;
            background: white;
            border-radius: 50%;
            padding: 8px;
            margin-bottom: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,.2);
        }

        .hero h1 {
            font-weight: 800;
            font-size: 38px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 16.5px;
            color: rgba(255,255,255,.9);
            max-width: 520px;
            margin: 0 auto;
        }

        /* SECTION HEADER */
        .section-title {
            font-weight: 800;
            color: var(--ink);
            font-size: 28px;
        }

        .section-sub {
            color: var(--muted);
            font-size: 15px;
        }

        .btn-tambah {
            background: var(--brand-blue);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 11px 20px;
            font-weight: 600;
            font-size: 14.5px;
        }

        .btn-tambah:hover {
            background: var(--brand-blue-dark);
            color: white;
        }

        /* CARDS */
        .facility-card {
            border: 1px solid var(--card-line);
            border-radius: 16px;
            overflow: hidden;
            background: white;
            height: 100%;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .facility-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(27, 99, 224, .15);
        }

        .facility-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .facility-body {
            padding: 22px;
        }

        .facility-title {
            font-family: 'Sora', sans-serif;
            font-size: 19px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 8px;
        }

        .facility-description {
            color: var(--muted);
            font-size: 14.5px;
            line-height: 1.65;
        }

        .admin-actions {
            border-top: 1px solid var(--card-line);
            margin-top: 18px;
            padding-top: 15px;
            display: flex;
            gap: 8px;
        }

        .admin-actions .btn {
            flex: 1;
            border-radius: 9px;
            font-weight: 600;
            font-size: 14px;
        }

        .btn-edit-fasilitas {
            background: #FDF1DC;
            color: #8A5A0B;
            border: 1px solid #F3D9A8;
        }

        .btn-edit-fasilitas:hover {
            background: #FBE6C1;
            color: #8A5A0B;
        }

        .btn-hapus-fasilitas {
            background: #FCEBEB;
            color: #B23A3A;
            border: 1px solid #F3C6C6;
        }

        .btn-hapus-fasilitas:hover {
            background: #F9DADA;
            color: #B23A3A;
        }

        /* FOOTER */
        footer {
            background: var(--ink);
            color: rgba(255,255,255,.75);
            margin-top: 70px;
            padding: 34px 0 26px;
        }

        footer .footer-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 6px;
        }

        footer .footer-brand img {
            height: 32px;
            width: 32px;
            object-fit: contain;
            border-radius: 50%;
            background: white;
            padding: 2px;
        }

        footer h5 {
            color: white;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            margin: 0;
        }

        .footer-admin-link {
            color: rgba(255,255,255,.45);
            font-size: 12.5px;
            text-decoration: none;
        }

        .footer-admin-link:hover {
            color: rgba(255,255,255,.75);
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 28px;
            }

            .hero-logo {
                height: 76px;
                width: 76px;
            }

            .admin-mode-bar {
                text-align: center;
            }

            .admin-mode-content {
                flex-direction: column;
            }

            .admin-mode-text {
                display: block;
                margin-left: 0;
                margin-top: 3px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                alt="Logo SMK N 1 Cijati"
            >
            SMK N 1 CIJATI
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil') }}">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jurusan.index') }}">
                        Jurusan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.index') }}">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('fasilitas.index') }}">
                        Fasilitas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/galeri') }}">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}">
                        Kontak
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ekstrakurikuler.index') }}">
                        Ekstrakurikuler
                    </a>
                </li>

                {{-- Tombol "Login Admin" untuk pengunjung umum sengaja
                     tidak ditampilkan di navbar. Admin tetap bisa masuk
                     lewat halaman login langsung atau tautan kecil
                     di footer. --}}

                @auth

                    <li class="nav-item ms-lg-2 me-2">
                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="btn-admin-dashboard"
                        >
                            <i class="bi bi-speedometer2"></i>
                            Dashboard Admin
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button
                                type="submit"
                                class="btn btn-outline-light btn-logout"
                            >
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </button>
                        </form>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>


<!-- MODE ADMINISTRATOR -->
@auth
<div class="admin-mode-bar">

    <div class="container">

        <div class="admin-mode-content">

            <div>
                <span class="admin-mode-title">
                    <i class="bi bi-shield-lock-fill"></i>
                    MODE ADMINISTRATOR
                </span>

                <span class="admin-mode-text">
                    Anda sedang mengelola website sekolah
                </span>
            </div>

            <a
                href="{{ route('admin.dashboard') }}"
                class="btn-admin-dashboard"
            >
                <i class="bi bi-speedometer2"></i>
                Dashboard Admin
            </a>

        </div>

    </div>

</div>
@endauth


<!-- HERO -->
<section class="hero">

    <div class="container">

        <img
            src="{{ asset('images/logo-smkn1.pgn.png') }}"
            alt="Logo SMK N 1 Cijati"
            class="hero-logo"
        >

        <h1>
            Fasilitas Sekolah
        </h1>

        <p>
            Fasilitas pendukung kegiatan belajar dan aktivitas siswa
            SMK Negeri 1 Cijati
        </p>

    </div>

</section>


<!-- CONTENT -->
<section class="py-5">

    <div class="container">

        <!-- JUDUL + TAMBAH -->
        <div class="d-flex justify-content-between align-items-end mb-4 flex-wrap gap-3">

            <div>
                <h2 class="section-title mb-1">
                    Fasilitas SMK N 1 Cijati
                </h2>

                <p class="section-sub mb-0">
                    Berbagai fasilitas yang tersedia di sekolah.
                </p>
            </div>

            @auth
                <a
                    href="{{ route('fasilitas.create') }}"
                    class="btn-tambah"
                >
                    <i class="bi bi-plus-circle"></i>
                    Tambah Fasilitas
                </a>
            @endauth

        </div>


        <!-- PESAN SUCCESS -->
        @if(session('success'))

            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                <i class="bi bi-check-circle-fill"></i>

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        <!-- PESAN ERROR -->
        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- DATA FASILITAS -->
        <div class="row g-4">

            @forelse($fasilitas as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="facility-card">

                        @php
                            // Bersihkan spasi/kutip nyasar dari database,
                            // lalu normalkan backslash (\) jadi slash (/)
                            // biar path tetap valid dipakai sebagai URL.
                            $gambar = trim($item->gambar ?? '', " \t\n\r\0\x0B'\"");
                            $gambar = str_replace('\\', '/', $gambar);
                        @endphp


                        @if($gambar)

                            <img
                                src="{{ asset('images/' . $gambar) }}"
                                alt="{{ $item->nama }}"
                                onerror="this.onerror=null;this.src='{{ asset('images/Lapangan.jpg.jpeg') }}';"
                            >

                        @else

                            <img
                                src="{{ asset('images/Lapangan.jpg.jpeg') }}"
                                alt="{{ $item->nama }}"
                            >

                        @endif


                        <div class="facility-body">

                            <div class="facility-title">
                                {{ $item->nama }}
                            </div>

                            <div class="facility-description">
                                {{ $item->deskripsi }}
                            </div>


                            <!-- TOMBOL ADMIN -->
                            @auth

                                <div class="admin-actions">

                                    <!-- EDIT -->
                                    <a
                                        href="{{ route('fasilitas.edit', $item->id) }}"
                                        class="btn btn-edit-fasilitas"
                                    >
                                        <i class="bi bi-pencil-square"></i>
                                        Edit
                                    </a>


                                    <!-- HAPUS -->
                                    <form
                                        action="{{ route('fasilitas.destroy', $item->id) }}"
                                        method="POST"
                                        class="flex-fill"
                                        onsubmit="return confirm('Yakin ingin menghapus fasilitas {{ addslashes($item->nama) }}?');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-hapus-fasilitas w-100"
                                        >
                                            <i class="bi bi-trash"></i>
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            @endauth

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="alert alert-info text-center">

                        <i class="bi bi-info-circle"></i>

                        Belum ada data fasilitas.

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer>

    <div class="container text-center">

        <div class="footer-brand">
            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                alt="Logo SMK N 1 Cijati"
            >
            <h5>
                SMK Negeri 1 Cijati
            </h5>
        </div>

        <p class="mb-2">
            Sekolah Menengah Kejuruan Negeri 1 Cijati
        </p>

        <small class="d-block mb-2">
            © {{ date('Y') }} SMK N 1 Cijati. Semua Hak Dilindungi.
        </small>

        @guest
            <a href="{{ route('login') }}" class="footer-admin-link">
                Login Admin
            </a>
        @endguest

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>