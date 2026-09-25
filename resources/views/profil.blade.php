<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil - SMKN 1 Cijati</title>

    {{-- BOOTSTRAP --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    {{-- BOOTSTRAP ICONS --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f9ff;
            color: #333;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.12);
        }

        .navbar-brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
            background: white;
            border-radius: 50%;
            padding: 3px;
        }

        .navbar-nav .nav-link {
            margin-left: 8px;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            transform: translateY(-2px);
            color: white !important;
        }

        /* =========================
           HERO PROFIL
        ========================= */

        .hero-profil {
            min-height: 380px;

            background:
                linear-gradient(
                    rgba(0, 70, 150, 0.45),
                    rgba(0, 123, 255, 0.45)
                ),
                url("{{ asset('images/rps.jpg.jpeg') }}");

            background-size: cover;
            background-position: center;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            color: white;
        }

        .hero-profil h1 {
            font-size: 48px;
            font-weight: 800;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
        }

        .hero-profil p {
            font-size: 18px;
            margin-top: 10px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* =========================
           JUDUL SECTION
        ========================= */

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h2 {
            color: #0a58ca;
            font-weight: 800;
            font-size: 34px;
        }

        .section-title p {
            color: #6c757d;
            margin-top: 8px;
        }

        /* =========================
           SEJARAH
        ========================= */

        .sejarah-section {
            padding: 80px 0;
            background: linear-gradient(180deg, #ffffff, #eaf5ff);
        }

        .sejarah-card {
            border: none;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(0, 70, 150, 0.10);
            overflow: hidden;
        }

        .sejarah-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .sejarah-body {
            padding: 40px;
        }

        .sejarah-body p {
            font-size: 16px;
            line-height: 1.9;
            text-align: justify;
        }

        .tanggal-penting {
            background: #e8f3ff;
            border-left: 5px solid #0d6efd;
            border-radius: 15px;
            padding: 20px;
            margin: 25px 0;
        }

        /* =========================
           IDENTITAS
        ========================= */

        .identitas-section {
            padding: 80px 0;
            background: white;
        }

        .info-card {
            height: 100%;
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            overflow: hidden;
        }

        .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .info-card-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 20px;
        }

        .info-card-header h4 {
            margin: 0;
            font-weight: 700;
        }

        .table td {
            padding: 14px;
            vertical-align: middle;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        /* =========================
           VISI MISI
        ========================= */

        .visi-misi-section {
            padding: 80px 0;
            background: linear-gradient(180deg, #eef7ff, #ffffff);
        }

        .visi-card,
        .misi-card {
            height: 100%;
            border: none;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(0, 70, 150, 0.09);
            background: white;
            transition: 0.3s;
        }

        .visi-card:hover,
        .misi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 70, 150, 0.14);
        }

        .icon-box {
            width: 65px;
            height: 65px;
            background: #e5f1ff;
            color: #0d6efd;
            border-radius: 18px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 30px;
            margin-bottom: 20px;
        }

        .visi-card h4,
        .misi-card h4 {
            color: #0a58ca;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .visi-card p {
            line-height: 1.9;
            text-align: justify;
        }

        .misi-card ul {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .misi-card li {
            margin-bottom: 13px;
            line-height: 1.7;
        }

        /* =========================
           TUJUAN
        ========================= */

        .tujuan-section {
            padding: 80px 0;
            background: white;
        }

        .tujuan-card {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.09);
        }

        .tujuan-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .tujuan-body {
            padding: 40px;
        }

        .tujuan-list {
            counter-reset: tujuan;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tujuan-list li {
            counter-increment: tujuan;
            position: relative;

            padding: 15px 15px 15px 60px;
            margin-bottom: 12px;

            background: #f4f9ff;
            border-radius: 12px;

            line-height: 1.7;
        }

        .tujuan-list li::before {
            content: counter(tujuan);

            position: absolute;
            left: 15px;
            top: 13px;

            width: 32px;
            height: 32px;

            border-radius: 50%;

            background: #0d6efd;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: bold;
        }

        /* =========================
           HIGHLIGHT
        ========================= */

        .highlight-section {
            padding: 70px 0;
            background: linear-gradient(135deg, #0d6efd, #084298);
            color: white;
        }

        .highlight-box {
            text-align: center;
            padding: 20px;
        }

        .highlight-box i {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .highlight-box h5 {
            font-weight: 700;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #062b63;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .hero-profil {
                min-height: 320px;
            }

            .hero-profil h1 {
                font-size: 34px;
            }

            .hero-profil p {
                font-size: 16px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .sejarah-body,
            .tujuan-body {
                padding: 25px;
            }

            .visi-card,
            .misi-card {
                padding: 25px;
            }

        }

    </style>

</head>


<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">

    <div class="container">

        {{-- LOGO --}}

        <a
            class="navbar-brand fw-bold d-flex align-items-center"
            href="/"
        >

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                class="me-2"
                alt="Logo SMK N 1 Cijati"
            >

            SMKN 1 CIJATI

        </a>


        {{-- TOMBOL MOBILE --}}

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        {{-- MENU --}}

        <div
            class="collapse navbar-collapse"
            id="navbarNav"
        >

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/profil">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/jurusan">
                        Jurusan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/guru">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fasilitas">
                        Fasilitas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/berita">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/galeri">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kontak">
                        Kontak
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/ekstrakurikuler">
                        Ekstrakurikuler
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


{{-- =====================================================
     HERO
===================================================== --}}

<section class="hero-profil">

    <div class="container">

        <h1>
            Profil SMKN 1 Cijati
        </h1>

        <p>
            Mengenal lebih dekat sejarah, identitas,
            dan tujuan SMK Negeri 1 Cijati
        </p>

    </div>

</section>


{{-- =====================================================
     SEJARAH SEKOLAH
===================================================== --}}

<section class="sejarah-section">

    <div class="container">

        <div class="section-title">

            <h2>
                <i class="bi bi-book-half"></i>
                Sejarah Sekolah
            </h2>

            <p>
                Perjalanan berdirinya SMK Negeri 1 Cijati
            </p>

        </div>


        <div class="sejarah-card">

            <div class="sejarah-header">

                <h4 class="mb-0">
                    <i class="bi bi-building me-2"></i>
                    Sejarah Singkat SMKN 1 Cijati
                </h4>

            </div>


            <div class="sejarah-body">

                <p>
                    <b>Sejarah Singkat</b> berawal dari keinginan kuat seorang
                    Pendidik bernama <b>H. Dede Kartiman</b> yang menginginkan
                    adanya pemerataan pendidikan menengah kejuruan untuk
                    daerah-daerah terpencil, terutama Kecamatan Cijati,
                    Kabupaten Cianjur.
                </p>

                <p>
                    Dukungan masyarakat sekitar lingkungan Kecamatan Cijati
                    yang menginginkan jenjang pendidikan menengah kejuruan
                    di wilayahnya menjadi pemicu utama berdirinya sekolah ini.
                </p>

                <p>
                    Bekerja sama dengan Dinas Pendidikan Kabupaten Cianjur,
                    permohonan pendirian <b>SMK Negeri 1 Cijati</b> diajukan
                    kepada Bupati Kabupaten Cianjur.
                </p>

                <p>
                    Pada awalnya, SMK Negeri 1 Cijati merupakan kelas jauh
                    dari SMK Negeri 2 Cilaku dengan membuka program keahlian
                    <b>Teknologi Pengolahan Hasil Pertanian (TPHP)</b>
                    di atas lahan seluas 1 Ha yang merupakan hibah dari
                    masyarakat Cijati.
                </p>


                <div class="tanggal-penting">

                    <h5 class="fw-bold text-primary">

                        <i class="bi bi-calendar-check-fill me-2"></i>

                        Tanggal Penting

                    </h5>

                    <p class="mb-0">

                        SMK Negeri 1 Cijati berdiri secara resmi sejak
                        <b>19 September 2006</b> berdasarkan Surat Keputusan
                        BUPATI Kabupaten Cianjur Nomor:
                        <b>421.5/Kep.179-Ks/2006</b>.

                    </p>

                </div>


                <p>
                    Seiring perkembangan, pada Tahun Pelajaran 2007
                    SMK Negeri 1 Cijati membuka program keahlian baru yaitu
                    <b>Pemasaran (PM)</b> dan
                    <b>Rekayasa Perangkat Lunak (RPL)</b>.
                </p>

                <p class="mb-0">
                    Kemudian pada Juli 2013 ditambahkan program
                    <b>Teknik Kendaraan Ringan (TKR)</b>.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
     IDENTITAS SEKOLAH
===================================================== --}}

<section class="identitas-section">

    <div class="container">

        <div class="section-title">

            <h2>
                <i class="bi bi-card-text"></i>
                Identitas Sekolah
            </h2>

            <p>
                Informasi umum SMK Negeri 1 Cijati
            </p>

        </div>


        <div class="row g-4">


            {{-- DATA SEKOLAH --}}

            <div class="col-lg-6">

                <div class="info-card">

                    <div class="info-card-header">

                        <h4>
                            <i class="bi bi-building me-2"></i>
                            Data Sekolah
                        </h4>

                    </div>


                    <div class="card-body p-4">

                        <table class="table">

                            <tr>
                                <td><b>NPSN</b></td>
                                <td>: 20252505</td>
                            </tr>

                            <tr>
                                <td><b>Nama Sekolah</b></td>
                                <td>: SMK Negeri 1 Cijati</td>
                            </tr>

                            <tr>
                                <td><b>Alamat</b></td>
                                <td>: Jl. Raya Cijati,desa cijati,kecamatan cijati,kabupaten cianjur,jawa barat 43284</td>
                            </tr>

                            <tr>
                                <td><b>Akreditasi</b></td>
                                <td>: A</td>
                            </tr>

                            <tr>
                                <td><b>Kabupaten</b></td>
                                <td>: Cianjur</td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>


            {{-- TENTANG SEKOLAH --}}

            <div class="col-lg-6">

                <div class="info-card">

                    <div class="info-card-header">

                        <h4>
                            <i class="bi bi-info-circle me-2"></i>
                            Tentang Sekolah
                        </h4>

                    </div>


                    <div class="card-body p-4">

                        <p style="line-height: 1.9; text-align: justify;">

                            SMK Negeri 1 Cijati merupakan sekolah menengah
                            kejuruan yang berkomitmen dalam memberikan
                            pendidikan dan keterampilan kepada peserta didik
                            agar siap menghadapi perkembangan dunia kerja,
                            dunia industri, serta melanjutkan pendidikan
                            ke jenjang yang lebih tinggi.

                        </p>


                        <div class="d-flex gap-3 mt-4">

                            <div class="text-primary fs-3">

                                <i class="bi bi-mortarboard-fill"></i>

                            </div>


                            <div>

                                <b>Pendidikan Berkualitas</b>

                                <p class="text-muted mb-0">

                                    Mengembangkan kompetensi dan karakter
                                    peserta didik.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


