<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jurusan - SMKN 1 Cijati</title>


    <!-- BOOTSTRAP -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP ICON -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <style>

        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            background-color: #0d6efd !important;
        }

        .navbar-brand img {
            object-fit: cover;
        }


        /* =====================================================
           MODE ADMINISTRATOR
        ===================================================== */

        .admin-mode-bar {
            background: #084298;
            color: white;
            padding: 10px 0;
            border-bottom: 3px solid #ffc107;
        }

        .admin-mode-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .admin-mode-title {
            font-weight: 700;
            font-size: 15px;
        }

        .admin-mode-text {
            font-size: 14px;
            opacity: .9;
            margin-left: 8px;
        }

        .admin-dashboard-btn {
            background: white;
            color: #0d6efd;
            border: none;
            border-radius: 20px;
            padding: 7px 17px;
            font-weight: bold;
            text-decoration: none;
            white-space: nowrap;
        }

        .admin-dashboard-btn:hover {
            background: #e9ecef;
            color: #084298;
        }


        /* =====================================================
           JUDUL
        ===================================================== */

        .page-title {
            font-weight: bold;
            color: #212529;
        }


        /* =====================================================
           CARD JURUSAN
        ===================================================== */

        .jurusan-card {
            border: none;
            overflow: hidden;
            border-radius: 8px;
            transition: 0.3s;
        }

        .jurusan-card:hover {
            transform: translateY(-5px);
        }

        .jurusan-header {
            min-height: 88px;
            background-color: #0d6efd !important;
        }


        /* =====================================================
           LOGO JURUSAN
        ===================================================== */

        .jurusan-logo {
            width: 55px;
            height: 55px;
            min-width: 55px;
            object-fit: contain;
            border-radius: 50%;
            background-color: white;
            padding: 5px;
        }


        /* =====================================================
           LOGO FALLBACK
        ===================================================== */

        .logo-fallback {
            width: 55px;
            height: 55px;
            min-width: 55px;

            border-radius: 50%;

            background-color: white;

            color: #0d6efd;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 15px;

            font-weight: bold;
        }


        /* =====================================================
           ADMIN BUTTON
        ===================================================== */

        .admin-buttons {
            border-top: 1px solid #eeeeee;

            padding-top: 15px;

            margin-top: 15px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            margin-top: 50px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 768px) {

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

            .admin-dashboard-btn {
                margin-top: 3px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">

    <div class="container">


        <!-- LOGO SEKOLAH -->

        <a
            class="navbar-brand fw-bold d-flex align-items-center"
            href="/"
        >

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                width="45"
                height="45"
                class="me-2 rounded-circle bg-white p-1"
                alt="Logo SMK N 1 Cijati"
            >

            SMK N 1 CIJATI

        </a>



        <!-- TOGGLE MOBILE -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >

            <span class="navbar-toggler-icon"></span>

        </button>



        <!-- MENU -->

        <div
            class="collapse navbar-collapse"
            id="navbarMenu"
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
                        class="nav-link active"
                        href="/jurusan"
                    >
                        Jurusan
                    </a>

                </li>



                <!-- GURU -->

                <li class="nav-item">

                    <a
                        class="nav-link"
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



                @auth


                    <!-- PEMBATAS -->

                    <li class="nav-item d-none d-lg-block mx-2">

                        <span class="text-white opacity-50">
                            |
                        </span>

                    </li>



                   


                   


                @endauth


            </ul>

        </div>

    </div>

</nav>







<!-- =====================================================
     CONTENT
===================================================== -->

<section class="py-5">

    <div class="container">


        <!-- =================================================
             JUDUL
        ================================================== -->

        <div class="text-center mb-5">

            <h1 class="page-title">

                KOMPETENSI KEAHLIAN

            </h1>


            <p class="text-muted">

                Program keahlian yang tersedia di SMK Negeri 1 Cijati

            </p>

        </div>



        <!-- =================================================
             PESAN BERHASIL
        ================================================== -->

        @if(session('success'))

            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >

                <strong>

                    Berhasil!

                </strong>

                {{ session('success') }}


                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif



        <!-- =================================================
             PESAN ERROR
        ================================================== -->

        @if($errors->any())

            <div class="alert alert-danger">

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
             DATA JURUSAN
        ================================================== -->

        <div class="row">


            @forelse($jurusans as $jurusan)


                @php

                    /*
                    |--------------------------------------------------------------------------
                    | KODE JURUSAN
                    |--------------------------------------------------------------------------
                    */

                    $kode = strtoupper(
                        trim($jurusan->kode ?? '')
                    );


                    /*
                    |--------------------------------------------------------------------------
                    | FOTO JURUSAN
                    |--------------------------------------------------------------------------
                    */

                    $fotoJurusan = null;


                    if ($kode === 'RPL') {

                        $fotoJurusan = 'rpl.jpg.jpeg';

                    }

                    elseif ($kode === 'BDP') {

                        $fotoJurusan = 'pemasaran.jpg.jpeg';

                    }

                    elseif ($kode === 'APHP') {

                        $fotoJurusan = 'aphp.jpg.jpeg';

                    }

                    elseif ($kode === 'TKRO') {

                        $fotoJurusan = 'tkr.jpg.jpeg';

                    }


                    /*
                    |--------------------------------------------------------------------------
                    | URL FOTO
                    |--------------------------------------------------------------------------
                    */

                    if ($fotoJurusan) {

                        $urlFoto = asset(
                            'images/jurusan/' . $fotoJurusan
                        );

                    }

                    else {

                        $urlFoto = null;

                    }

                @endphp



                <!-- =================================================
                     CARD JURUSAN
                ================================================== -->

                <div class="col-md-6 mb-4">


                    <div class="card shadow h-100 jurusan-card">


                        <!-- =================================================
                             HEADER
                        ================================================== -->

                        <div
                            class="card-header text-white jurusan-header d-flex align-items-center"
                        >


                            <!-- FOTO -->

                            @if($urlFoto)


                                <img
                                    src="{{ $urlFoto }}"
                                    alt="{{ $jurusan->nama }}"
                                    class="jurusan-logo me-3"
                                    onerror="
                                        this.style.display='none';
                                        document.getElementById('fallback-{{ $jurusan->id }}').style.display='flex';
                                    "
                                >


                                <!-- FOTO CADANGAN -->

                                <div
                                    id="fallback-{{ $jurusan->id }}"
                                    class="logo-fallback me-3"
                                    style="display:none;"
                                >

                                    {{ $kode }}

                                </div>


                            @else


                                <div class="logo-fallback me-3">

                                    {{ $kode }}

                                </div>


                            @endif



                            <!-- NAMA JURUSAN -->

                            <div>


                                <h3 class="mb-0">

                                    {{ $jurusan->kode }}

                                </h3>


                                <small>

                                    {{ $jurusan->nama }}

                                </small>


                            </div>


                        </div>



                        <!-- =================================================
                             BODY
                        ================================================== -->

                        <div class="card-body">


                            <!-- DESKRIPSI -->

                            <p>

                                <b>

                                    Deskripsi:

                                </b>

                                {{ $jurusan->deskripsi }}

                            </p>



                            <!-- PELUANG KERJA -->

                            <p>

                                <b>

                                    Peluang Kerja:

                                </b>

                                {{ $jurusan->peluang_kerja }}

                            </p>



                            <!-- INFO PENDAFTARAN -->

                            <a
                                href="/kontak"
                                class="btn btn-primary"
                            >

                                <i class="bi bi-info-circle"></i>

                                Info Pendaftaran

                            </a>





                        </div>


                    </div>

                </div>


            @empty


                <!-- =================================================
                     BELUM ADA DATA
                ================================================== -->

                <div class="col-12">



                    </div>


                </div>


            @endforelse


        </div>


    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="bg-dark text-white text-center py-3">

    <p class="mb-0">

        © 2026 SMK Negeri 1 Cijati

    </p>

</footer>



<!-- =====================================================
     BOOTSTRAP JS
===================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>