<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Guru - SMK Negeri 1 Cijati</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Fonts -->
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
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, .brand-font {
            font-family: 'Sora', 'Inter', Arial, sans-serif;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            background: var(--brand-blue);
            box-shadow: 0 2px 14px rgba(27, 99, 224, .25);
            padding: 12px 0;
        }

        .navbar-brand {
            color: white !important;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            display: flex;
            align-items: center;
            font-size: 19px;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            margin-right: 10px;
            border-radius: 50%;
            background: white;
            padding: 3px;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,.85) !important;
            font-weight: 500;
            font-size: 15px;
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

        .navbar-toggler {
            border-color: rgba(255,255,255,.5);
        }

        .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .btn-admin-dashboard {
            background: var(--amber);
            color: var(--ink);
            border: none;
            border-radius: 20px;
            padding: 8px 18px;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-admin-dashboard:hover {
            background: #e09a26;
            color: var(--ink);
        }

        .btn-logout-nav {
            border-radius: 20px;
            font-weight: 700;
            font-size: 14px;
            padding: 8px 18px;
        }


        /* =====================================================
           MODE ADMINISTRATOR
        ===================================================== */

        .admin-mode-bar {
            background: var(--ink);
            color: white;
            padding: 11px 0;
            border-bottom: 3px solid var(--amber);
        }

        .admin-mode-bar .admin-title {
            font-weight: 700;
            letter-spacing: .3px;
            font-size: 14px;
        }

        .admin-mode-bar .admin-description {
            opacity: .85;
            font-size: 13.5px;
        }

        .admin-mode-bar .btn {
            border-radius: 20px;
            padding: 7px 16px;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .page-header {
            position: relative;
            padding: 56px 20px 46px;
            text-align: center;
            background:
                linear-gradient(180deg, rgba(27, 99, 224, .06), rgba(27, 99, 224, 0));
        }

        .page-header::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 3px;
            background: var(--amber);
        }

        .page-header-logo {
            height: 70px;
            width: 70px;
            object-fit: contain;
            background: white;
            border-radius: 50%;
            padding: 6px;
            box-shadow: 0 8px 20px rgba(27, 99, 224, .18);
            margin-bottom: 14px;
        }

        .page-header h1 {
            font-weight: 800;
            color: var(--ink);
            font-size: 30px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: var(--muted);
            margin-bottom: 0;
            font-size: 15px;
        }


        /* =====================================================
           AREA TAMBAH
        ===================================================== */

        .admin-area {
            margin-bottom: 30px;
        }

        .btn-tambah {
            background: var(--brand-blue);
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 10px;
            padding: 11px 20px;
            font-size: 14.5px;
        }

        .btn-tambah:hover {
            background: var(--brand-blue-dark);
            color: white;
        }


        /* =====================================================
           CARD GURU
        ===================================================== */

        .guru-card {
            border: 1px solid var(--card-line);
            border-radius: 18px;
            background: white;
            padding: 26px 24px;
            height: 100%;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .guru-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(27, 99, 224, .14);
        }


        /* =====================================================
           FOTO GURU
        ===================================================== */

        .guru-photo-wrapper {
            width: 140px;
            height: 140px;
            margin: 0 auto 18px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--brand-blue);
            background: #E9F2FF;
        }

        .guru-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .guru-default {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brand-blue);
        }

        .guru-default i {
            font-size: 60px;
        }


        /* =====================================================
           NAMA / NIP / MAPEL
        ===================================================== */

        .guru-name {
            font-family: 'Sora', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--ink);
            text-align: center;
            margin-bottom: 6px;
        }

        .guru-nip {
            color: var(--muted);
            text-align: center;
            font-size: 13.5px;
            margin-bottom: 10px;
        }

        .guru-mapel {
            color: var(--brand-blue);
            font-weight: 600;
            text-align: center;
            font-size: 14.5px;
        }

        .guru-info {
            margin-top: 14px;
            text-align: center;
        }

        .badge-guru {
            background: #E9F2FF;
            color: var(--brand-blue);
            font-weight: 600;
            font-size: 12.5px;
            padding: 6px 14px;
            border-radius: 20px;
        }


        /* =====================================================
           TOMBOL ADMIN
        ===================================================== */

        .admin-buttons {
            border-top: 1px solid var(--card-line);
            margin-top: 20px;
            padding-top: 16px;
        }

        .admin-buttons .btn {
            border-radius: 9px;
            font-weight: 600;
            font-size: 14px;
            padding: 9px;
        }

        .btn-edit-guru {
            background: #FDF1DC;
            color: #8A5A0B;
            border: 1px solid #F3D9A8;
        }

        .btn-edit-guru:hover {
            background: #FBE6C1;
            color: #8A5A0B;
        }

        .btn-hapus-guru {
            background: #FCEBEB;
            color: #B23A3A;
            border: 1px solid #F3C6C6;
        }

        .btn-hapus-guru:hover {
            background: #F9DADA;
            color: #B23A3A;
        }


        /* =====================================================
           DATA KOSONG
        ===================================================== */

        .empty-data {
            text-align: center;
            padding: 70px 20px;
            color: var(--muted);
        }

        .empty-data i {
            font-size: 56px;
            color: #C3CEDD;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            margin-top: 70px;
            background: var(--ink);
            color: rgba(255,255,255,.75);
            text-align: center;
            padding: 30px 15px 24px;
        }

        footer .footer-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        footer .footer-brand img {
            height: 30px;
            width: 30px;
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
            font-size: 16px;
        }

        .footer-admin-link {
            color: rgba(255,255,255,.45);
            font-size: 12.5px;
            text-decoration: none;
        }

        .footer-admin-link:hover {
            color: rgba(255,255,255,.75);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 991px) {

            .navbar-nav .nav-link {
                margin-left: 0;
                padding: 8px 0 !important;
            }

            .admin-mode-bar .admin-description {
                display: block;
                margin-top: 3px;
            }

        }


        @media (max-width: 768px) {

            .navbar-brand {
                font-size: 16px;
            }

            .page-header {
                padding-top: 40px;
            }

            .page-header h1 {
                font-size: 24px;
            }

            .admin-mode-bar {
                text-align: center;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg">

    <div class="container">


        <!-- LOGO + NAMA SEKOLAH -->

        <a class="navbar-brand" href="/">

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                alt="Logo SMK Negeri 1 Cijati"
            >

            SMK N 1 CIJATI

        </a>


        <!-- TOGGLE MOBILE -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENU -->

        <div
            class="collapse navbar-collapse"
            id="navbarNav"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">


                <!-- BERANDA -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/"
                    >

                        Beranda

                    </a>

                </li>


                <!-- PROFIL -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/profil"
                    >

                        Profil

                    </a>

                </li>


                <!-- JURUSAN -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/jurusan"
                    >

                        Jurusan

                    </a>

                </li>


                <!-- GURU -->

                <li class="nav-item">

                    <a
                        class="nav-link active"
                        href="/guru"
                    >

                        Guru

                    </a>

                </li>


                <!-- FASILITAS -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/fasilitas"
                    >

                        Fasilitas

                    </a>

                </li>


                <!-- BERITA -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/berita"
                    >

                        Berita

                    </a>

                </li>


                <!-- GALERI -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/galeri"
                    >

                        Galeri

                    </a>

                </li>


                <!-- KONTAK -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/kontak"
                    >

                        Kontak

                    </a>

                </li>


                <!-- EKSTRAKURIKULER -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/ekstrakurikuler"
                    >

                        Ekstrakurikuler

                    </a>

                </li>


                {{-- Tombol "Login Admin" untuk pengunjung umum sengaja
                     tidak ditampilkan di navbar. Admin tetap bisa masuk
                     lewat tautan kecil di footer. --}}

                @auth


                    <!-- PEMBATAS -->

                    <li class="nav-item d-none d-lg-block mx-2">

                        <span class="text-white opacity-50">

                            |

                        </span>

                    </li>


                    <!-- ADMIN -->

                    <li class="nav-item">

                        <a
                            href="{{ route('admin.dashboard') }}"
                            class="btn-admin-dashboard"
                        >

                            <i class="bi bi-speedometer2"></i>

                            Dashboard Admin

                        </a>

                    </li>


                    <!-- LOGOUT -->

                    <li class="nav-item ms-lg-2">

                        <form
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-inline"
                        >

                            @csrf

                            <button
                                type="submit"
                                class="btn btn-outline-light btn-logout-nav"
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



<!-- =====================================================
     MODE ADMINISTRATOR
     HANYA MUNCUL KETIKA LOGIN
===================================================== -->

@auth

<div class="admin-mode-bar">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">


            <!-- KETERANGAN -->

            <div>

                <span class="admin-title">

                    <i class="bi bi-shield-lock-fill"></i>

                    MODE ADMINISTRATOR

                </span>


                <span class="admin-description ms-lg-2">

                    Anda sedang mengelola website sekolah

                </span>

            </div>


            <!-- DASHBOARD -->

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



<!-- =====================================================
     HEADER
===================================================== -->

<section class="page-header">

    <div class="container">

        <img
            src="{{ asset('images/logo-smkn1.pgn.png') }}"
            alt="Logo SMK Negeri 1 Cijati"
            class="page-header-logo"
        >

        <h1>

            Data Guru

        </h1>


        <p>

            Daftar tenaga pendidik SMK Negeri 1 Cijati

        </p>

    </div>

</section>



<!-- =====================================================
     PESAN SUKSES / ERROR
===================================================== -->

<div class="container">


    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show mt-4">

            <i class="bi bi-check-circle-fill"></i>

            <strong>Berhasil!</strong>

            {{ session('success') }}


            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif



    @if($errors->any())

        <div class="alert alert-danger mt-4">

            <strong>
                Terjadi kesalahan:
            </strong>


            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>

                        {{ $error }}

                    </li>

                @endforeach

            </ul>

        </div>

    @endif



    <!-- =================================================
         TOMBOL TAMBAH
    ================================================== -->

    @auth

        <div class="admin-area text-end mt-4">

            <a
                href="{{ route('guru.create') }}"
                class="btn btn-tambah"
            >

                <i class="bi bi-person-plus-fill"></i>

                Tambah Data Guru

            </a>

        </div>

    @endauth


</div>



<!-- =====================================================
     DATA GURU
===================================================== -->

<div class="container pb-5">


    @if($gurus->count() > 0)


        <div class="row g-4">


            @foreach($gurus as $guru)


                @php

                    /*
                    |--------------------------------------------------------------------------
                    | MEMBERSIHKAN NAMA FOTO
                    |--------------------------------------------------------------------------
                    */

                    $foto = trim(
                        $guru->foto ?? '',
                        " \t\n\r\0\x0B'\""
                    );


                    $fotoUrl = null;


                    /*
                    |--------------------------------------------------------------------------
                    | FOTO DARI STORAGE
                    |--------------------------------------------------------------------------
                    */

                    if ($foto !== '') {


                        if (
                            str_starts_with($foto, 'guru/')
                            &&
                            file_exists(
                                storage_path(
                                    'app/public/' . $foto
                                )
                            )
                        ) {

                            $fotoUrl = asset(
                                'storage/' . $foto
                            );

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | FOTO DARI public/images/guru
                        |--------------------------------------------------------------------------
                        */

                        elseif (
                            file_exists(
                                public_path(
                                    'images/guru/' . $foto
                                )
                            )
                        ) {

                            $fotoUrl = asset(
                                'images/guru/' . $foto
                            );

                        }


                        /*
                        |--------------------------------------------------------------------------
                        | FOTO DENGAN PATH LAMA
                        |--------------------------------------------------------------------------
                        */

                        elseif (
                            file_exists(
                                public_path(
                                    'images/guru/' .
                                    basename($foto)
                                )
                            )
                        ) {

                            $fotoUrl = asset(
                                'images/guru/' .
                                basename($foto)
                            );

                        }

                    }

                @endphp



                <!-- =================================================
                     CARD GURU
                ================================================== -->

                <div class="col-lg-4 col-md-6">


                    <div class="guru-card">


                        <!-- =================================================
                             FOTO
                        ================================================== -->

                        <div class="guru-photo-wrapper">


                            @if($fotoUrl)


                                <img
                                    src="{{ $fotoUrl }}"
                                    alt="Foto {{ $guru->nama }}"
                                    class="guru-photo"
                                >


                            @else


                                <div class="guru-default">

                                    <i class="bi bi-person-fill"></i>

                                </div>


                            @endif


                        </div>



                        <!-- =================================================
                             NAMA
                        ================================================== -->

                        <div class="guru-name">

                            {{ $guru->nama }}

                        </div>



                        <!-- =================================================
                             NIP
                        ================================================== -->

                        <div class="guru-nip">

                            <i class="bi bi-person-vcard"></i>

                            NIP:

                            {{ $guru->nip }}

                        </div>



                        <!-- =================================================
                             MAPEL
                        ================================================== -->

                        <div class="guru-mapel">

                            <i class="bi bi-book-fill"></i>

                            {{ $guru->mapel }}

                        </div>



                        <!-- =================================================
                             BADGE
                        ================================================== -->

                        <div class="guru-info">

                            <span class="badge-guru">

                                <i class="bi bi-person-badge-fill"></i>

                                Guru

                            </span>

                        </div>



                        <!-- =================================================
                             TOMBOL ADMIN
                             HANYA MUNCUL KETIKA LOGIN
                        ================================================== -->

                        @auth

                            <div class="admin-buttons">

                                <div class="row g-2">


                                    <!-- EDIT -->

                                    <div class="col-6">

                                        <a
                                            href="{{ route('guru.edit', $guru->id) }}"
                                            class="btn btn-edit-guru w-100"
                                        >

                                            <i class="bi bi-pencil-square"></i>

                                            Edit

                                        </a>

                                    </div>



                                    <!-- HAPUS -->

                                    <div class="col-6">

                                        <form
                                            action="{{ route('guru.destroy', $guru->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data guru {{ $guru->nama }}?')"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="btn btn-hapus-guru w-100"
                                            >

                                                <i class="bi bi-trash-fill"></i>

                                                Hapus

                                            </button>

                                        </form>

                                    </div>


                                </div>

                            </div>

                        @endauth


                    </div>

                </div>


            @endforeach


        </div>


    @else


        <!-- =================================================
             JIKA BELUM ADA DATA
        ================================================== -->

        <div class="empty-data">

            <i class="bi bi-people"></i>


            <h4 class="mt-3">

                Belum Ada Data Guru

            </h4>


            <p>

                Data guru belum tersedia.

            </p>


            @auth

                <a
                    href="{{ route('guru.create') }}"
                    class="btn btn-tambah"
                >

                    <i class="bi bi-person-plus-fill"></i>

                    Tambah Data Guru

                </a>

            @endauth

        </div>


    @endif


</div>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container">

        <div class="footer-brand">

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                alt="Logo SMK Negeri 1 Cijati"
            >

            <h5>
                SMK Negeri 1 Cijati
            </h5>

        </div>

        <p class="mb-1">

            © {{ date('Y') }} SMK Negeri 1 Cijati

        </p>

        <small class="d-block mb-2">

            Semua Hak Dilindungi

        </small>

        @guest

            <a href="{{ route('login') }}" class="footer-admin-link">
                Login Admin
            </a>

        @endguest

    </div>

</footer>



<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>