<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $galeri->judul }} - Galeri SMK Negeri 1 Cijati</title>

    <meta name="description"
        content="Dokumentasi kegiatan {{ $galeri->judul }} SMK Negeri 1 Cijati">

    <!-- Bootstrap 5.3.3 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f9ff;
            color: #1f2937;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: #ffffff;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            padding: 14px 0;
        }

        .navbar-brand {
            font-weight: 700;
            color: #0d6efd !important;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin-left: 8px;
            margin-right: 8px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        .nav-link.active {
            color: #0d6efd !important;
            font-weight: 700;
        }

        /* =========================
           HEADER
        ========================= */

        .page-header {
            background:
                linear-gradient(
                    135deg,
                    rgba(13, 110, 253, 0.96),
                    rgba(0, 74, 173, 0.96)
                );

            color: white;
            padding: 80px 0 70px;
            margin-bottom: 0;
        }

        .page-header h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 17px;
            margin-bottom: 0;
            opacity: 0.92;
        }

        .breadcrumb {
            margin-bottom: 25px;
        }

        .breadcrumb-item,
        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: white;
        }

        /* =========================
           DETAIL GALERI
        ========================= */

        .gallery-section {
            padding: 70px 0;
        }

        .gallery-info {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
            margin-bottom: 35px;
        }

        .gallery-title {
            color: #0d6efd;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .gallery-date {
            color: #6c757d;
            font-size: 15px;
            margin-bottom: 18px;
        }

        .gallery-description {
            color: #555;
            line-height: 1.8;
            margin-bottom: 0;
        }

        .photo-count {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: #eaf3ff;
            color: #0d6efd;
            padding: 8px 14px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-top: 20px;
        }

        /* =========================
           PHOTO CARD
        ========================= */

        .photo-card {
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .photo-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.13);
        }

        .photo-wrapper {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
            background: #eef4fb;
        }

        .photo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .photo-card:hover .photo-wrapper img {
            transform: scale(1.06);
        }

        .photo-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;
        }

        .photo-card:hover .photo-overlay {
            background: rgba(0, 0, 0, 0.35);
        }

        .photo-overlay i {
            color: white;
            font-size: 35px;
            opacity: 0;
            transform: scale(0.7);
            transition: 0.3s;
        }

        .photo-card:hover .photo-overlay i {
            opacity: 1;
            transform: scale(1);
        }

        .photo-number {
            padding: 12px 18px;
            color: #555;
            font-size: 14px;
            font-weight: 600;
            background: white;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty-gallery {
            background: white;
            border-radius: 20px;
            padding: 70px 20px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
        }

        .empty-gallery i {
            font-size: 65px;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .empty-gallery h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .empty-gallery p {
            color: #6c757d;
            margin-bottom: 0;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-back {
            border-radius: 50px;
            padding: 10px 20px;
            font-weight: 600;
        }

        /* =========================
           MODAL
        ========================= */

        .modal-content {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            background: #000;
        }

        .modal-header {
            border: none;
            background: #000;
            color: white;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-body {
            padding: 0;
            background: #000;
        }

        .modal-body img {
            width: 100%;
            max-height: 80vh;
            object-fit: contain;
            display: block;
        }

        .btn-close {
            filter: invert(1);
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0b2d5c;
            color: white;
            padding: 50px 0 20px;
            margin-top: 20px;
        }

        footer h5 {
            font-weight: 700;
            margin-bottom: 15px;
        }

        footer p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            margin-top: 30px;
            padding-top: 20px;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .page-header {
                padding: 60px 0 50px;
            }

            .page-header h1 {
                font-size: 30px;
            }

            .gallery-title {
                font-size: 24px;
            }

            .photo-wrapper {
                height: 230px;
            }

        }

    </style>

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar navbar-expand-lg sticky-top">

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">

                <img
                    src="{{ asset('images/logo-smkn1.pgn.png') }}"
                    alt="Logo SMK Negeri 1 Cijati">

                <span>SMK Negeri 1 Cijati</span>

            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/profil') }}">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/jurusan') }}">
                            Jurusan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/guru') }}">
                            Guru
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/fasilitas') }}">
                            Fasilitas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/berita') }}">
                            Berita
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="{{ url('/galeri') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/ekstrakurikuler') }}">
                            Ekstrakurikuler
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/kontak') }}">
                            Kontak
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- =========================
         HEADER
    ========================= -->

    <section class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('galeri.index') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Detail
                    </li>

                </ol>

            </nav>

            <h1>
                {{ $galeri->judul }}
            </h1>

            <p>
                Dokumentasi kegiatan SMK Negeri 1 Cijati
            </p>

        </div>

    </section>


    <!-- =========================
         DETAIL GALERI
    ========================= -->

    <section class="gallery-section">

        <div class="container">

            <!-- Tombol kembali -->

            <div class="mb-4">

                <a
                    href="{{ route('galeri.index') }}"
                    class="btn btn-outline-primary btn-back">

                    <i class="bi bi-arrow-left me-2"></i>

                    Kembali ke Galeri

                </a>

            </div>


            <!-- Informasi Galeri -->

            <div class="gallery-info">

                <div class="gallery-title">

                    {{ $galeri->judul }}

                </div>


                @if($galeri->tanggal)

                    <div class="gallery-date">

                        <i class="bi bi-calendar3 me-2"></i>

                        {{ $galeri->tanggal->format('d F Y') }}

                    </div>

                @endif


                @if($galeri->deskripsi)

                    <p class="gallery-description">

                        {{ $galeri->deskripsi }}

                    </p>

                @endif


                <div class="photo-count">

                    <i class="bi bi-images"></i>

                    {{ $galeri->fotos->count() }} Foto

                </div>

            </div>


            <!-- =========================
                 FOTO-FOTO GALERI
            ========================= -->

            @if($galeri->fotos->count() > 0)

                <div class="row g-4">

                    @foreach($galeri->fotos as $index => $foto)

                        <div class="col-lg-4 col-md-6">

                            <div
                                class="photo-card"
                                data-bs-toggle="modal"
                                data-bs-target="#fotoModal{{ $foto->id }}">

                                <div class="photo-wrapper">

                                    <img
                                        src="{{ asset('storage/' . $foto->foto) }}"
                                        alt="{{ $galeri->judul }} - Foto {{ $index + 1 }}"
                                        loading="lazy">

                                    <div class="photo-overlay">

                                        <i class="bi bi-zoom-in"></i>

                                    </div>

                                </div>

                                <div class="photo-number">

                                    <i class="bi bi-image me-2"></i>

                                    Foto {{ $index + 1 }}

                                </div>

                            </div>

                        </div>


                        <!-- =========================
                             MODAL FOTO
                        ========================= -->

                        <div
                            class="modal fade"
                            id="fotoModal{{ $foto->id }}"
                            tabindex="-1"
                            aria-hidden="true">

                            <div class="modal-dialog modal-xl modal-dialog-centered">

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title">

                                            {{ $galeri->judul }}

                                            <small class="ms-2 opacity-75">

                                                Foto {{ $index + 1 }}

                                            </small>

                                        </h5>

                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>

                                    </div>

                                    <div class="modal-body">

                                        <img
                                            src="{{ asset('storage/' . $foto->foto) }}"
                                            alt="{{ $galeri->judul }} - Foto {{ $index + 1 }}">

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <!-- =========================
                     JIKA BELUM ADA FOTO
                ========================= -->

                <div class="empty-gallery">

                    <i class="bi bi-images"></i>

                    <h4>
                        Belum Ada Foto
                    </h4>

                    <p>
                        Belum ada foto yang tersedia untuk kegiatan ini.
                    </p>

                </div>

            @endif

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <div class="container">

            <div class="row g-4">

                <div class="col-md-6">

                    <h5>
                        SMK Negeri 1 Cijati
                    </h5>

                    <p>
                        Website resmi SMK Negeri 1 Cijati sebagai
                        media informasi sekolah, kegiatan, berita,
                        fasilitas, guru, jurusan, dan dokumentasi
                        kegiatan sekolah.
                    </p>

                </div>


                <div class="col-md-3">

                    <h5>
                        Navigasi
                    </h5>

                    <p class="mb-1">
                        <a
                            href="{{ url('/') }}"
                            class="text-white text-decoration-none">
                            Beranda
                        </a>
                    </p>

                    <p class="mb-1">
                        <a
                            href="{{ url('/profil') }}"
                            class="text-white text-decoration-none">
                            Profil
                        </a>
                    </p>

                    <p class="mb-1">
                        <a
                            href="{{ url('/guru') }}"
                            class="text-white text-decoration-none">
                            Guru
                        </a>
                    </p>

                    <p class="mb-1">
                        <a
                            href="{{ url('/galeri') }}"
                            class="text-white text-decoration-none">
                            Galeri
                        </a>
                    </p>

                </div>


                <div class="col-md-3">

                    <h5>
                        Galeri
                    </h5>

                    <p>
                        Lihat berbagai dokumentasi kegiatan
                        dan aktivitas SMK Negeri 1 Cijati.
                    </p>

                </div>

            </div>


            <div class="footer-bottom">

                &copy; {{ date('Y') }}
                SMK Negeri 1 Cijati.
                Semua Hak Dilindungi.

            </div>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>