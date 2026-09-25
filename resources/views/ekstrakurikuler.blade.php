<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ekstrakurikuler - SMK N 1 CIJATI</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f5f7fb;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* ==============================
           NAVBAR
        ============================== */

        .navbar {
            padding: 12px 0;
            box-shadow: 0 2px 12px rgba(13, 110, 253, 0.18);
        }

        .navbar-brand img {
            width: 44px;
            height: 44px;
            object-fit: contain;
            border-radius: 50%;
            background: white;
            padding: 3px;
        }

        .navbar-brand span {
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 0.2px;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            margin: 0 4px;
            border-radius: 6px;
            padding: 8px 12px !important;
            transition: background 0.2s ease, opacity 0.2s ease;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .navbar-nav .nav-link.active {
            background: rgba(255, 255, 255, 0.18);
            font-weight: 700;
        }

        /* ==============================
           HERO BACKGROUND RPL
        ============================== */

        .hero {
            min-height: 330px;

            background-image:
                linear-gradient(
                    rgba(13, 110, 253, 0.75),
                    rgba(9, 66, 153, 0.8)
                ),
                url("{{ asset('images/rps.jpg.jpeg') }}");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            color: white;

            padding: 60px 20px;
        }

        .hero-content {
            max-width: 850px;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 15px;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.35);
        }

        .hero p {
            font-size: 17px;
            line-height: 1.7;
            margin: 0;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.95);
            color: #0d6efd;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        /* ==============================
           SECTION
        ============================== */

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            color: #173b68;
            font-weight: bold;
            font-size: 32px;
        }

        .section-title p {
            color: #6c757d;
            margin-top: 10px;
        }

        /* ==============================
           CARD
        ============================== */

        .eskul-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);

            transition: 0.3s;
        }

        .eskul-card:hover {
            transform: translateY(-6px);

            box-shadow:
                0 12px 30px rgba(0, 0, 0, 0.13);
        }

        /* ==============================
           AREA FOTO
        ============================== */

        .eskul-image {
            width: 100%;
            height: 210px;

            position: relative;
            overflow: hidden;

            background: #e9f2ff;
        }

        .foto-ekskul {
            width: 100%;
            height: 210px;

            object-fit: cover;
            display: block;

            transition: 0.4s;
        }

        .eskul-card:hover .foto-ekskul {
            transform: scale(1.05);
        }

        /* ==============================
           LOGO EKSTRAKURIKULER
        ============================== */

        .logo-ekskul {
            position: absolute;

            top: 12px;
            right: 12px;

            width: 68px;
            height: 68px;

            background: white;

            border-radius: 12px;

            padding: 6px;

            display: flex;
            align-items: center;
            justify-content: center;

            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.28);

            z-index: 20;
        }

        .logo-ekskul img {
            width: 100%;
            height: 100%;

            object-fit: contain;

            border-radius: 7px;
            display: block;
        }

        /* ==============================
           LOGO ERROR
        ============================== */

        .logo-error {
            font-size: 10px;
            color: #999;
            text-align: center;
            line-height: 1.2;
        }

        /* ==============================
           JIKA FOTO TIDAK ADA
        ============================== */

        .no-image {
            width: 100%;
            height: 210px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #e9f2ff;

            color: #0d6efd;

            font-weight: bold;
        }

        /* ==============================
           ISI CARD
        ============================== */

        .eskul-content {
            padding: 22px;
        }

        .eskul-content h3 {
            color: #173b68;

            font-size: 21px;

            font-weight: bold;

            margin-bottom: 12px;
        }

        .eskul-content p {
            color: #6c757d;

            font-size: 14px;

            line-height: 1.7;

            margin-bottom: 15px;
        }

        /* ==============================
           INFORMASI JADWAL & PEMBINA
        ============================== */

        .info-ekskul {
            margin-top: 15px;
            margin-bottom: 18px;

            padding: 13px;

            background: #f5f8fc;

            border-radius: 10px;

            border-left: 4px solid #0d6efd;
        }

        .info-item {
            display: flex;

            align-items: flex-start;

            margin-bottom: 8px;

            font-size: 14px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 25px;

            flex-shrink: 0;

            font-size: 16px;
        }

        .info-label {
            font-weight: bold;

            color: #173b68;

            margin-right: 5px;
        }

        .info-value {
            color: #6c757d;
        }

        /* ==============================
           BUTTON
        ============================== */

        .btn-detail {
            display: inline-block;

            background: #0d6efd;

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 8px;

            font-size: 14px;

            font-weight: bold;

            transition: 0.3s;
        }

        .btn-detail:hover {
            background: #0b5ed7;

            color: white;

            transform: translateY(-2px);
        }

        /* ==============================
           DATA KOSONG
        ============================== */

        .empty {
            background: white;

            padding: 50px;

            border-radius: 15px;

            text-align: center;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .empty h3 {
            color: #173b68;
        }

        .empty p {
            color: #6c757d;
            margin-top: 8px;
        }

        /* ==============================
           FOOTER
        ============================== */

        footer {
            background: #173b68;

            color: white;

            padding: 30px 0;

            margin-top: 60px;
        }

        /* ==============================
           RESPONSIVE
        ============================== */

        @media (max-width: 576px) {

            .hero {
                min-height: 280px;
                padding: 45px 15px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .hero p {
                font-size: 14px;
            }

            .hero-badge {
                font-size: 13px;
            }

            .logo-ekskul {
                width: 58px;
                height: 58px;

                top: 10px;
                right: 10px;
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

            {{-- LOGO SEKOLAH --}}

            <a
                class="navbar-brand d-flex align-items-center"
                href="/"
            >

                <img
                    src="{{ asset('images/logo-smkn1.pgn.png') }}"
                    alt="Logo SMK N 1 Cijati"
                >

                <span class="ms-2">
                    SMK N 1 CIJATI
                </span>

            </a>


            {{-- MOBILE BUTTON --}}

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
            >

                <span class="navbar-toggler-icon"></span>

            </button>


            {{-- MENU --}}

            <div
                class="collapse navbar-collapse"
                id="navbarMenu"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Beranda
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/profil">
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

                        <a
                            class="nav-link active"
                            href="/ekstrakurikuler"
                        >
                            Ekstrakurikuler
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    {{-- =====================================================
         HERO DENGAN BACKGROUND RPL
    ===================================================== --}}

    <section class="hero">

        <div class="container hero-content">

            
            <h1>
                Ekstrakurikuler
            </h1>

            <p>
                Berbagai kegiatan ekstrakurikuler di SMK N 1 Cijati
                sebagai wadah untuk mengembangkan bakat, minat,
                kreativitas, kedisiplinan, dan karakter siswa.
            </p>

        </div>

    </section>



    {{-- =====================================================
         DAFTAR EKSTRAKURIKULER
    ===================================================== --}}

    <section class="py-5">

        <div class="container">


            {{-- JUDUL --}}

            <div class="section-title">

                <h2>
                    Kegiatan Ekstrakurikuler
                </h2>

                <p>
                    Berbagai kegiatan yang dapat diikuti oleh siswa
                    untuk mengembangkan bakat dan minat.
                </p>

            </div>



            {{-- =================================================
                 CEK DATA
            ================================================== --}}

            @if($ekstrakurikuler->count() > 0)


                <div class="row g-4">


                    {{-- =================================================
                         LOOP DATA
                    ================================================== --}}

                    @foreach($ekstrakurikuler as $ekskul)


                        <div class="col-md-6 col-lg-4">


                            <div class="eskul-card">


                                {{-- =====================================
                                     FOTO DAN LOGO
                                ====================================== --}}

                                <div class="eskul-image">


                                    {{-- FOTO KEGIATAN --}}

                                    @if(!empty($ekskul->foto))

                                        <img
                                            src="{{ asset('images/' . $ekskul->foto) }}"
                                            alt="{{ $ekskul->nama }}"
                                            class="foto-ekskul"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                        >

                                        <div
                                            class="no-image"
                                            style="display:none;"
                                        >
                                            Foto tidak ditemukan
                                        </div>

                                    @else

                                        <div class="no-image">
                                            Belum ada gambar
                                        </div>

                                    @endif



                                    {{-- =================================
                                         LOGO EKSTRAKURIKULER
                                    ================================== --}}

                                    @if(!empty($ekskul->logo))

                                        <div class="logo-ekskul">

                                            <img
                                                src="{{ asset('images/' . $ekskul->logo) }}"
                                                alt="Logo {{ $ekskul->nama }}"

                                                onerror="
                                                    this.style.display='none';
                                                    this.parentElement.innerHTML='<span class=\'logo-error\'>Logo tidak ditemukan</span>';
                                                "
                                            >

                                        </div>

                                    @endif


                                </div>



                                {{-- =====================================
                                     ISI CARD
                                ====================================== --}}

                                <div class="eskul-content">


                                    {{-- NAMA --}}

                                    <h3>
                                        {{ $ekskul->nama }}
                                    </h3>



                                    {{-- DESKRIPSI --}}

                                    <p>
                                        {{ $ekskul->deskripsi ?? 'Belum ada deskripsi kegiatan.' }}
                                    </p>



                                    {{-- =================================
                                         JADWAL DAN PEMBINA
                                    ================================== --}}

                                    @if(!empty($ekskul->jadwal) || !empty($ekskul->pembina))

                                        <div class="info-ekskul">


                                            {{-- JADWAL --}}

                                            @if(!empty($ekskul->jadwal))

                                                <div class="info-item">

                                                    <div class="info-icon">
                                                        📅
                                                    </div>

                                                    <div>

                                                        <span class="info-label">
                                                            Jadwal:
                                                        </span>

                                                        <span class="info-value">
                                                            {{ $ekskul->jadwal }}
                                                        </span>

                                                    </div>

                                                </div>

                                            @endif



                                            {{-- PEMBINA --}}

                                            @if(!empty($ekskul->pembina))

                                                <div class="info-item">

                                                    <div class="info-icon">
                                                        👨‍🏫
                                                    </div>

                                                    <div>

                                                        <span class="info-label">
                                                            Pembina:
                                                        </span>

                                                        <span class="info-value">
                                                            {{ $ekskul->pembina }}
                                                        </span>

                                                    </div>

                                                </div>

                                            @endif


                                        </div>

                                    @endif



                                    {{-- =================================
                                         TOMBOL DETAIL
                                    ================================== --}}

                                    <a
                                        href="{{ route('ekstrakurikuler.show', $ekskul->id) }}"
                                        class="btn-detail"
                                    >
                                        Lihat Selengkapnya
                                    </a>


                                </div>

                            </div>


                        </div>


                    @endforeach


                </div>


            @else


                {{-- =================================
                     DATA KOSONG
                ================================== --}}

                <div class="empty">

                    <h3>
                        Belum Ada Data
                    </h3>

                    <p>
                        Data ekstrakurikuler belum tersedia.
                    </p>

                </div>


            @endif


        </div>

    </section>



    {{-- =====================================================
         FOOTER
    ===================================================== --}}

    <footer>

        <div class="container">

            <div class="row align-items-center">


                <div class="col-md-6 text-center text-md-start">

                    <h5 class="fw-bold">
                        SMK N 1 CIJATI
                    </h5>

                    <p class="mb-0">
                        Sekolah Menengah Kejuruan Negeri 1 Cijati
                    </p>

                </div>


                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">

                    <p class="mb-0">
                        &copy; {{ date('Y') }} SMK N 1 Cijati
                    </p>

                </div>


            </div>

        </div>

    </footer>



    {{-- =====================================================
         BOOTSTRAP JS
    ===================================================== --}}

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>