<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $ekskul->nama }} - SMK Negeri 1 Cijati</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #173b68;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            background: #173b68;

            padding: 12px 7%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            position: sticky;
            top: 0;

            z-index: 1000;
        }


        /* LOGO SEKOLAH */

        .logo {
            display: flex;
            align-items: center;

            text-decoration: none;
            color: white;
        }

        .logo img {
            width: 52px;
            height: 52px;

            object-fit: contain;

            background: white;

            border-radius: 50%;

            padding: 3px;

            margin-right: 10px;
        }

        .logo-text h2 {
            font-size: 20px;
            margin-bottom: 3px;
        }

        .logo-text p {
            font-size: 11px;
            color: white;
        }


        /* MENU */

        .menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .menu a {
            color: white;

            text-decoration: none;

            font-size: 14px;

            padding: 8px 0;

            transition: 0.3s;
        }

        .menu a:hover {
            color: #a9d0ff;
        }

        .menu a.active {
            font-weight: bold;

            border-bottom: 2px solid white;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 90%;
            max-width: 965px;

            margin: 40px auto;
        }


        /* =========================
           TOMBOL KEMBALI
        ========================= */

        .back-button {
            display: inline-block;

            background: #173b68;

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 8px;

            font-size: 14px;

            margin-bottom: 20px;

            transition: 0.3s;
        }

        .back-button:hover {
            background: #0d6efd;
        }


        /* =========================
           DETAIL CARD
        ========================= */

        .detail-card {
            background: white;

            border-radius: 18px;

            overflow: hidden;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.10);
        }


        /* =========================
           FOTO + LOGO
        ========================= */

        .detail-image {
            width: 100%;

            height: 380px;

            position: relative;

            overflow: hidden;

            background: #eaf2ff;
        }


        /* FOTO KEGIATAN */

        .detail-image > img.foto-kegiatan {
            width: 100%;
            height: 100%;

            object-fit: cover;

            display: block;
        }


        /* =========================
           LOGO EKSTRAKURIKULER
        ========================= */

        .logo-ekskul-detail {

            position: absolute;

            top: 20px;
            right: 20px;

            width: 90px;
            height: 90px;

            background: white;

            border-radius: 15px;

            padding: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.30);

            z-index: 10;
        }

        .logo-ekskul-detail img {

            width: 100%;
            height: 100%;

            object-fit: contain;

            border-radius: 8px;

            display: block;
        }


        /* LOGO TIDAK ADA */

        .logo-tidak-ada {

            font-size: 11px;

            color: #777;

            text-align: center;

            line-height: 1.3;
        }


        /* =========================
           JIKA FOTO TIDAK ADA
        ========================= */

        .no-image {

            width: 100%;
            height: 100%;

            display: flex;

            align-items: center;
            justify-content: center;

            background: #eaf2ff;

            color: #0d6efd;

            font-weight: bold;
        }


        /* =========================
           DETAIL CONTENT
        ========================= */

        .detail-content {

            padding: 35px 40px 40px;
        }

        .detail-content h1 {

            font-size: 34px;

            margin-bottom: 25px;

            color: #173b68;
        }

        .detail-content h2 {

            font-size: 21px;

            margin-bottom: 25px;

            color: #173b68;
        }

        .description {

            color: #5f6f82;

            font-size: 15px;

            line-height: 1.8;

            margin-bottom: 25px;
        }


        /* =========================
           INFO JADWAL PEMBINA
        ========================= */

        .info-detail {

            background: #f5f8fc;

            border-left: 5px solid #0d6efd;

            border-radius: 10px;

            padding: 18px 20px;

            margin-top: 20px;

            margin-bottom: 30px;
        }

        .info-detail-item {

            display: flex;

            align-items: flex-start;

            margin-bottom: 12px;

            font-size: 15px;
        }

        .info-detail-item:last-child {

            margin-bottom: 0;
        }

        .info-detail-icon {

            width: 30px;

            flex-shrink: 0;

            font-size: 17px;
        }

        .info-detail-label {

            font-weight: bold;

            color: #173b68;

            margin-right: 6px;
        }

        .info-detail-value {

            color: #5f6f82;
        }


        /* =========================
           BUTTON
        ========================= */

        .btn-kembali {

            display: inline-block;

            background: #173b68;

            color: white;

            text-decoration: none;

            padding: 11px 20px;

            border-radius: 8px;

            font-size: 14px;

            transition: 0.3s;
        }

        .btn-kembali:hover {

            background: #0d6efd;

            color: white;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .navbar {
                padding: 12px 4%;
            }

            .menu {
                gap: 10px;
            }

            .menu a {
                font-size: 12px;
            }

        }


        @media (max-width: 700px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            .menu {
                flex-wrap: wrap;

                justify-content: center;
            }

            .detail-image {
                height: 280px;
            }

            .logo-ekskul-detail {
                width: 70px;
                height: 70px;

                top: 12px;
                right: 12px;
            }

            .detail-content {
                padding: 25px;
            }

            .detail-content h1 {
                font-size: 28px;
            }

        }


        @media (max-width: 500px) {

            .logo-text h2 {
                font-size: 17px;
            }

            .logo-text p {
                font-size: 9px;
            }

            .detail-image {
                height: 230px;
            }

            .detail-content {
                padding: 20px;
            }

        }

    </style>

</head>


<body>


{{-- =====================================================
     NAVBAR
===================================================== --}}

<nav class="navbar">


    {{-- LOGO SEKOLAH --}}

    <a href="/" class="logo">

        <img
            src="{{ asset('images/logo-smkn1.pgn.png') }}"
            alt="Logo SMK Negeri 1 Cijati"
        >

        <div class="logo-text">

            <h2>
                SMK NEGERI 1 CIJATI
            </h2>

            <p>
                Kompeten • Kreatif • Berkarakter
            </p>

        </div>

    </a>



    {{-- MENU --}}

    <div class="menu">

        <a href="/">
            Beranda
        </a>

        <a href="/profil">
            Profil
        </a>

        <a href="/jurusan">
            Jurusan
        </a>

        <a href="/guru">
            Guru
        </a>

        <a href="/fasilitas">
            Fasilitas
        </a>

        <a href="/informasi">
            Informasi
        </a>

        <a
            href="/ekstrakurikuler"
            class="active"
        >
            Ekstrakurikuler
        </a>

        <a href="/kontak">
            Kontak
        </a>

        <a href="/berita">
            Berita
        </a>

    </div>

</nav>



{{-- =====================================================
     CONTENT
===================================================== --}}

<div class="container">





    {{-- =================================================
         DETAIL CARD
    ================================================== --}}

    <div class="detail-card">


        {{-- =================================================
             FOTO KEGIATAN + LOGO
        ================================================== --}}

        <div class="detail-image">


            {{-- FOTO KEGIATAN --}}

            @if(!empty($ekskul->foto))

                <img
                    src="{{ asset('images/' . $ekskul->foto) }}"
                    alt="{{ $ekskul->nama }}"
                    class="foto-kegiatan"
                >

            @else

                <div class="no-image">
                    Belum ada gambar kegiatan
                </div>

            @endif



            {{-- =================================================
                 LOGO EKSTRAKURIKULER
            ================================================== --}}

            @if(!empty($ekskul->logo))

                <div class="logo-ekskul-detail">

                    <img
                        src="{{ asset('images/' . $ekskul->logo) }}"
                        alt="Logo {{ $ekskul->nama }}"

                        onerror="
                            this.style.display='none';
                            this.parentElement.innerHTML='<span class=\'logo-tidak-ada\'>Logo tidak ditemukan</span>';
                        "
                    >

                </div>

            @endif


        </div>



        {{-- =================================================
             DETAIL CONTENT
        ================================================== --}}

        <div class="detail-content">


            {{-- NAMA --}}

            <h1>
                {{ $ekskul->nama }}
            </h1>



            {{-- TENTANG --}}

            <h2>
                Tentang Kegiatan
            </h2>


            <p class="description">

                {{ $ekskul->deskripsi ?? 'Belum ada deskripsi kegiatan.' }}

            </p>



            {{-- =================================================
                 JADWAL & PEMBINA
            ================================================== --}}

            @if(!empty($ekskul->jadwal) || !empty($ekskul->pembina))

                <div class="info-detail">


                    {{-- JADWAL --}}

                    @if(!empty($ekskul->jadwal))

                        <div class="info-detail-item">

                            <div class="info-detail-icon">
                                📅
                            </div>

                            <div>

                                <span class="info-detail-label">
                                    Jadwal:
                                </span>

                                <span class="info-detail-value">
                                    {{ $ekskul->jadwal }}
                                </span>

                            </div>

                        </div>

                    @endif



                    {{-- PEMBINA --}}

                    @if(!empty($ekskul->pembina))

                        <div class="info-detail-item">

                            <div class="info-detail-icon">
                                👨‍🏫
                            </div>

                            <div>

                                <span class="info-detail-label">
                                    Pembina:
                                </span>

                                <span class="info-detail-value">
                                    {{ $ekskul->pembina }}
                                </span>

                            </div>

                        </div>

                    @endif


                </div>

            @endif



            {{-- TOMBOL KEMBALI --}}

            <a
                href="{{ route('ekstrakurikuler.index') }}"
                class="btn-kembali"
            >
                ← Kembali
            </a>


        </div>

    </div>

</div>



</body>

</html>