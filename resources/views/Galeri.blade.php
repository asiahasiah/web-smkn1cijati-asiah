<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri - SMK Negeri 1 Cijati</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f9ff;
            color: #1f2937;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: linear-gradient(90deg, #0d6efd, #084298);
        }

        .navbar-brand {
            font-size: 20px;
        }

        .navbar-brand i {
            font-size: 20px;
        }

        .navbar .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
            margin-left: 8px;
            transition: .3s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: #ffffff;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            background: linear-gradient(
                135deg,
                #0d6efd,
                #084298
            );

            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero-icon {
            font-size: 55px;
            margin-bottom: 10px;
        }

        .hero h1 {
            font-size: 45px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 19px;
            margin-bottom: 0;
            opacity: .95;
        }


        /* =========================
           SECTION
        ========================= */

        .gallery-section {
            padding: 70px 0;
        }

        .section-title {
            color: #0d6efd;
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .section-description {
            color: #6b7280;
            margin-bottom: 35px;
        }


        /* =========================
           GALLERY CARD
        ========================= */

        .gallery-card {
            border: none;
            border-radius: 22px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: all .3s ease;
            height: 100%;
        }

        .gallery-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .14);
        }


        /* =========================
           FOTO UTAMA
        ========================= */

        .gallery-photo-wrapper {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #eaf2ff;
        }

        .gallery-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .gallery-card:hover .gallery-photo {
            transform: scale(1.05);
        }


        /* =========================
           LOGO SEKOLAH
        ========================= */

        .school-logo {
            position: absolute;
            top: 15px;
            left: 15px;

            width: 52px;
            height: 52px;

            object-fit: contain;

            background: rgba(255, 255, 255, .95);

            padding: 5px;

            border-radius: 50%;

            box-shadow: 0 4px 12px rgba(0, 0, 0, .25);

            z-index: 5;
        }


        /* =========================
           JUMLAH FOTO
        ========================= */

        .photo-count-badge {
            position: absolute;
            right: 15px;
            bottom: 15px;

            background: rgba(13, 110, 253, .95);
            color: white;

            padding: 7px 12px;

            border-radius: 30px;

            font-size: 13px;
            font-weight: 600;

            box-shadow: 0 4px 12px rgba(0, 0, 0, .2);
        }


        /* =========================
           CARD BODY
        ========================= */

        .gallery-body {
            padding: 22px;
        }

        .gallery-title {
            color: #0b3d91;
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .gallery-date {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .gallery-date i {
            color: #0d6efd;
        }

        .gallery-description {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.7;
            min-height: 48px;
        }

        .btn-gallery {
            background: #0d6efd;
            border: none;
            color: white;
            border-radius: 10px;
            padding: 10px 18px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-gallery:hover {
            background: #084298;
            color: white;
        }


        /* =========================
           EMPTY STATE
        ========================= */

        .empty-gallery {
            background: white;
            border-radius: 22px;
            padding: 80px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
        }

        .empty-gallery i {
            font-size: 75px;
            color: #0d6efd;
        }

        .empty-gallery h3 {
            margin-top: 20px;
            font-weight: 700;
        }

        .empty-gallery p {
            color: #6b7280;
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0b3d91;
            color: white;
            padding: 40px 0;
            margin-top: 30px;
        }

        footer .footer-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            background: white;
            padding: 5px;
            border-radius: 50%;
            margin-bottom: 12px;
        }

        footer h5 {
            font-weight: 700;
        }

        footer p {
            margin-bottom: 0;
            opacity: .85;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .hero {
                padding: 60px 20px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .hero p {
                font-size: 16px;
            }

            .section-title {
                font-size: 28px;
            }

            .gallery-photo-wrapper {
                height: 220px;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">

    <div class="container">

        <a
            class="navbar-brand fw-bold"
            href="/">

            <i class="bi bi-mortarboard-fill me-2"></i>

            SMK Negeri 1 Cijati

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/profil">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/jurusan">
                        Jurusan
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/guru">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/fasilitas">
                        Fasilitas
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/berita">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="/galeri">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="/kontak">
                        Kontak
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="container">

        <div class="hero-icon">

            <i class="bi bi-images"></i>

        </div>

        <h1>
            Galeri Sekolah
        </h1>

        <p>
            Dokumentasi kegiatan SMK Negeri 1 Cijati
        </p>

    </div>

</section>


<!-- =====================================================
     GALERI
===================================================== -->

<section class="gallery-section">

    <div class="container">


        @if($galeris->count() > 0)

            <div class="text-center mb-5">

                <h2 class="section-title">
                    Dokumentasi Kegiatan
                </h2>

                <p class="section-description">
                    Kumpulan dokumentasi kegiatan dan aktivitas
                    SMK Negeri 1 Cijati.
                </p>

            </div>


            <div class="row g-4">

                @foreach($galeris as $galeri)

                    @php

                        $fotoPertama = $galeri->fotos->first();

                    @endphp


                    <div class="col-md-6 col-lg-4">

                        <div class="gallery-card">


                            <!-- FOTO -->

                            <div class="gallery-photo-wrapper">


                                @if($fotoPertama)

                                    <img
                                        src="{{ asset('storage/' . $fotoPertama->foto) }}"
                                        alt="{{ $galeri->judul }}"
                                        class="gallery-photo">


                                @else

                                    <div
                                        class="w-100 h-100 d-flex align-items-center justify-content-center">

                                        <i
                                            class="bi bi-image"
                                            style="font-size: 70px; color: #0d6efd;">
                                        </i>

                                    </div>

                                @endif


                                <!-- LOGO SEKOLAH -->

                                <img
                                    src="{{ asset('images/logo-smkn1.pgn.png') }}"
                                    alt="Logo SMK Negeri 1 Cijati"
                                    class="school-logo">


                                <!-- JUMLAH FOTO -->

                                <div class="photo-count-badge">

                                    <i class="bi bi-images me-1"></i>

                                    {{ $galeri->fotos->count() }}

                                    Foto

                                </div>


                            </div>


                            <!-- INFORMASI -->

                            <div class="gallery-body">


                                <div class="gallery-title">

                                    {{ $galeri->judul }}

                                </div>


                                @if($galeri->tanggal)

                                    <div class="gallery-date">

                                        <i class="bi bi-calendar3 me-1"></i>

                                        {{ $galeri->tanggal->format('d F Y') }}

                                    </div>

                                @endif


                                @if($galeri->deskripsi)

                                    <div class="gallery-description mb-3">

                                        {{ Str::limit($galeri->deskripsi, 120) }}

                                    </div>

                                @endif


                                <a
                                    href="{{ route('galeri.show', $galeri->id) }}"
                                    class="btn btn-gallery w-100">

                                    <i class="bi bi-images me-1"></i>

                                    Lihat Semua Foto

                                </a>


                            </div>

                        </div>

                    </div>

                @endforeach

            </div>


        @else

            <!-- EMPTY -->

            <div class="empty-gallery">

                <i class="bi bi-images"></i>

                <h3>
                    Belum Ada Galeri
                </h3>

                <p>
                    Belum ada dokumentasi kegiatan sekolah.
                </p>

            </div>

        @endif


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container text-center">

        <img
            src="{{ asset('images/logo-smkn1.pgn.png') }}"
            alt="Logo SMK Negeri 1 Cijati"
            class="footer-logo">

        <h5>
            SMK Negeri 1 Cijati
        </h5>

        <p>
            Dokumentasi Kegiatan Sekolah
        </p>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>