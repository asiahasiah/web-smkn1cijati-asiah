<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMK N 1 CIJATI - Sekolah Pusat Keunggulan</title>

    {{-- Bootstrap --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    {{-- Bootstrap Icons --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    >

    <style>

        /* =====================================================
           GLOBAL
           ===================================================== */

        html {
            scroll-behavior: smooth;
        }


        /* =====================================================
           HERO
           ===================================================== */

        .hero {
            background:
                url('{{ asset('images/banner.jpg') }}')
                center/cover
                no-repeat;

            height: 90vh;

            color: white;

            text-shadow:
                2px 2px 5px #000;
        }


        /* =====================================================
           LOGO
           ===================================================== */

        .logo {
            height: 50px;
        }


        /* =====================================================
           SECTION
           ===================================================== */

        section {
            padding: 80px 0;
        }


        /* =====================================================
           FOTO GURU
           ===================================================== */

        .card-guru img {
            height: 200px;

            object-fit: cover;
        }


        /* =====================================================
   LOGO ADMIN POJOK KIRI BAWAH
   ===================================================== */

.logo-pojok-bawah {
    position: fixed;

    left: 15px;
    bottom: 15px;

    width: 35px;
    height: 35px;

    z-index: 99999;

    display: block;

    background: white;

    border-radius: 50%;

    padding: 3px;

    opacity: 0.65;

    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);

    transition: all 0.3s ease;

    cursor: pointer;
}

.logo-pojok-bawah img {
    width: 100%;
    height: 100%;

    object-fit: contain;

    border-radius: 50%;

    display: block;
}

.logo-pojok-bawah:hover {
    opacity: 1;

    transform: scale(1.15);
}


/* HP */

@media (max-width: 576px) {

    .logo-pojok-bawah {

        width: 30px;
        height: 30px;

        left: 10px;
        bottom: 10px;
    }
}

        /* =====================================================
           GAMBAR DI DALAM LOGO
           ===================================================== */

        .logo-pojok-bawah img {

            width: 100%;
            height: 100%;

            object-fit: contain;

            border-radius: 50%;

            display: block;
        }


        /* =====================================================
           SAAT MOUSE DIARAHKAN KE LOGO
           ===================================================== */

        .logo-pojok-bawah:hover {

            opacity: 1;

            transform: scale(1.15);
        }


        /* =====================================================
           HP / MOBILE
           ===================================================== */

        @media (max-width: 576px) {

            .logo-pojok-bawah {

                width: 30px;
                height: 30px;

                left: 10px;
                bottom: 10px;
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


        {{-- =================================================
             LOGO SEKOLAH
             ================================================= --}}

        <a
            class="navbar-brand fw-bold d-flex align-items-center"
            href="/"
        >

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                height="45"
                class="me-2 rounded-circle bg-white p-1"
                alt="Logo SMKN 1 Cijati"
            >

            SMK N 1 CIJATI

        </a>


        {{-- =================================================
             TOGGLE MOBILE
             ================================================= --}}

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


        {{-- =================================================
             MENU NAVBAR
             ================================================= --}}

        <div
            class="collapse navbar-collapse"
            id="navbarNav"
        >

            <ul class="navbar-nav ms-auto">


                {{-- BERANDA --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/"
                    >
                        Beranda
                    </a>

                </li>


                {{-- PROFIL --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('profil') }}"
                    >
                        Profil
                    </a>

                </li>


                {{-- GURU --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('guru.index') }}"
                    >
                        Guru
                    </a>

                </li>


                {{-- JURUSAN --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('jurusan.index') }}"
                    >
                        Jurusan
                    </a>

                </li>


                {{-- FASILITAS --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('fasilitas.index') }}"
                    >
                        Fasilitas
                    </a>

                </li>


                {{-- EKSTRAKURIKULER --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('ekstrakurikuler.index') }}"
                    >
                        Ekstrakurikuler
                    </a>

                </li>


                {{-- BERITA --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('berita.index') }}"
                    >
                        Berita
                    </a>

                </li>


                {{-- GALERI --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="/galeri"
                    >
                        Galeri
                    </a>

                </li>


                {{-- KONTAK --}}

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('kontak') }}"
                    >
                        Kontak
                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>



{{-- =====================================================
     HERO / BERANDA
     ===================================================== --}}

<section
    id="home"
    class="d-flex align-items-center text-center"

    style="
        background:
        linear-gradient(
            rgba(13,110,253,0.8),
            rgba(10,88,202,0.8)
        ),
        url('{{ asset('images/gerbang.jpg.jpeg') }}')
        center/cover no-repeat;

        height: 90vh;

        color: white;
    "
>

    <div class="container">


        {{-- LOGO SEKOLAH DI HERO --}}

        <img
            src="{{ asset('images/logo-smkn1.pgn.png') }}"
            height="120"
            class="mb-4"
            alt="Logo SMKN 1 Cijati"
        >


        {{-- JUDUL --}}

        <h1 class="display-3 fw-bold">

            SMK NEGERI 1 CIJATI

        </h1>


        {{-- SLOGAN --}}

        <p class="lead fs-4 mt-3">

            "Mewujudkan Lulusan Kompeten, Berkarakter, dan Siap Kerja"

        </p>


        {{-- TOMBOL JELAJAHI --}}

        <a
            href="#profil"
            class="btn btn-warning btn-lg mt-4 text-dark fw-bold"
        >

            <i class="bi bi-arrow-down"></i>

            Jelajahi Website

        </a>

    </div>

</section>



{{-- =====================================================
     SECTION PROFIL + VISI MISI
     ===================================================== --}}

<section
    id="profil"
    class="py-5"

    style="
        background: #E6F3FF;
    "
>

    <div class="container">


        {{-- JUDUL --}}

        <h2
            class="text-center fw-bold mb-5"

            style="
                color: #0a58ca;
                font-size: 36px;
            "
        >

            PROFIL SEKOLAH

        </h2>


        <div class="row">


            {{-- =================================================
                 VISI
                 ================================================= --}}

            <div class="col-md-6 mb-4">

                <div
                    class="card border-primary h-100 shadow-lg"

                    style="
                        border-radius: 15px;
                    "
                >

                    <div
                        class="card-header bg-primary text-white"
                    >

                        <h4 class="mb-0 fw-bold">

                            VISI

                        </h4>

                    </div>


                    <div
                        class="card-body"

                        style="
                            font-size: 16px;
                            font-weight: 500;
                            line-height: 1.8;
                            color: #212529;
                        "
                    >

                        <p class="mb-0 fw-semibold">

                            Mewujudkan

                            <b>
                                SMK Negeri 1 Cijati
                            </b>

                            sebagai

                            <b>
                                Sekolah Pusat Keunggulan
                            </b>

                            yang menghasilkan lulusan

                            <b>
                                Kompeten, Berkarakter, Berwirausaha,
                                dan Siap Kerja
                            </b>

                            di Era Global

                        </p>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 MISI
                 ================================================= --}}

            <div class="col-md-6 mb-4">

                <div
                    class="card border-primary h-100 shadow-lg"

                    style="
                        border-radius: 15px;
                    "
                >

                    <div
                        class="card-header bg-primary text-white"
                    >

                        <h4 class="mb-0 fw-bold">

                            MISI

                        </h4>

                    </div>


                    <div
                        class="card-body"

                        style="
                            font-size: 16px;
                            font-weight: 500;
                            line-height: 1.8;
                            color: #212529;
                        "
                    >

                        <ol class="mb-0 ps-3 fw-semibold">

                            <li class="mb-2">

                                Menyelenggarakan pendidikan vokasi
                                <b>berbasis industri</b>

                            </li>


                            <li class="mb-2">

                                Meningkatkan kompetensi guru dan tenaga
                                kependidikan

                            </li>


                            <li class="mb-2">

                                Membekali peserta didik dengan
                                <b>jiwa wirausaha</b>

                            </li>


                            <li class="mb-2">

                                Mengembangkan sarana prasarana yang
                                <b>modern</b>

                            </li>


                            <li class="mb-0">

                                Menjalin kerjasama dengan
                                <b>DUDI</b>

                            </li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     SECTION SAMBUTAN KEPALA SEKOLAH
     ===================================================== --}}

<section
    id="sambutan"
    class="py-5"

    style="
        background:
        linear-gradient(
            135deg,
            #E6F3FF 0%,
            #ffffff 100%
        );
    "
>

    <div class="container">


        <div
            class="card border-0 shadow-lg"

            style="
                border-radius: 20px;
                overflow: hidden;
            "
        >

            <div
                class="row g-0 align-items-center"
            >


                {{-- =================================================
                     FOTO KEPALA SEKOLAH
                     ================================================= --}}

                <div
                    class="col-md-4 text-center p-4"

                    style="
                        background:
                        linear-gradient(
                            180deg,
                            #0d6efd,
                            #0a58ca
                        );
                    "
                >

                    <h5
                        class="text-white fw-bold mb-3"

                        style="
                            letter-spacing: 2px;
                        "
                    >

                        KEPALA SEKOLAH

                    </h5>


                    <img
                        src="{{ asset('images/kepsek.jpg.jpeg') }}"

                        class="
                            rounded-circle
                            border
                            border-4
                            border-white
                            shadow
                        "

                        width="200"
                        height="200"

                        style="
                            object-fit: cover;
                        "

                        alt="Kepala Sekolah"
                    >


                    <h5
                        class="
                            text-white
                            fw-bold
                            mt-3
                            mb-0
                        "
                    >

                        A Rahmat Dimyati, S.Pd., M.Pd.

                    </h5>


                    <p class="text-white-50 small">

                        Kepala SMK Negeri 1 Cijati

                    </p>

                </div>



                {{-- =================================================
                     TEXT SAMBUTAN
                     ================================================= --}}

                <div class="col-md-8 p-5">


                    <h3
                        class="fw-bold mb-4"

                        style="
                            color: #0a58ca;
                        "
                    >

                        <i
                            class="
                                bi
                                bi-chat-quote-fill
                                me-2
                            "
                        ></i>

                        Sambutan Kepala Sekolah

                    </h3>


                    <p
                        class="fw-semibold"

                        style="
                            font-size: 16px;
                            line-height: 1.8;
                            color: #333;
                            text-align: justify;
                        "
                    >

                        Assalamu'alaikum Warahmatullahi Wabarakatuh

                        <br><br>

                        Puji syukur kehadirat Allah SWT, kami menyambut
                        dengan bangga kehadiran Anda di website resmi
                        <b>SMK Negeri 1 Cijati</b>.

                        Website ini kami hadirkan sebagai wujud komitmen
                        kami dalam memberikan informasi yang transparan
                        dan akurat.

                        <br><br>

                        Kami bertekad untuk terus mencetak lulusan yang

                        <b>
                            Kompeten, Berkarakter, Berwirausaha,
                            dan Siap Kerja
                        </b>

                        sesuai dengan tuntutan dunia industri.

                        Mari bersama kita membangun generasi emas bangsa.

                        <br><br>

                        Wassalamu'alaikum Warahmatullahi Wabarakatuh

                    </p>


                    {{-- TOMBOL BACA SELENGKAPNYA --}}

                    <a
                        href="/profil"

                        class="
                            btn
                            btn-primary
                            mt-3
                            fw-bold
                        "
                    >

                        Baca Selengkapnya →

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     LOGO ADMIN
     POJOK KIRI BAWAH
     KLIK → HALAMAN ADMIN
     ===================================================== --}}

<a
    href="{{ url('/admin') }}"
    class="logo-pojok-bawah"
    title="Admin"
    aria-label="Admin"
>

    <img
        src="{{ asset('images/klik.jpg.jpg') }}"
        alt="Admin"
    >

</a>



{{-- =====================================================
     BOOTSTRAP JAVASCRIPT
     ===================================================== --}}

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


</body>
</html>