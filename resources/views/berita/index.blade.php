<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita - SMKN 1 Cijati</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- BOOTSTRAP ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .berita-container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .alert {
            padding: 15px;
            background: #d4edda;
            color: #155724;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .berita-card {
            background: white;
            border-radius: 12px;
            margin-bottom: 25px;
            padding: 20px;
            display: flex;
            gap: 25px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .berita-image {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        .foto-kosong {
            width: 300px;
            height: 200px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            color: #666;
        }

        .berita-content {
            flex: 1;
        }

        .berita-content h2 {
            margin-top: 0;
        }

        .tanggal {
            color: #777;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .artikel {
            line-height: 1.7;
        }

        .baca {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .baca:hover {
            background: #0056b3;
        }

        .tambah {
            display: inline-block;
            margin-bottom: 25px;
            padding: 12px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        @media (max-width: 768px) {
            .berita-card {
                flex-direction: column;
            }

            .berita-image,
            .foto-kosong {
                width: 100%;
                height: 220px;
            }
        }
    </style>

</head>

<body>

{{-- ========================================================= --}}
{{-- NAVBAR --}}
{{-- ========================================================= --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">

    <div class="container">

        {{-- LOGO + NAMA SEKOLAH --}}
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                height="45"
                class="me-2 rounded-circle bg-white p-1"
                alt="Logo SMKN 1 Cijati"
            >

            SMK N 1 CIJATI

        </a>


        {{-- TOGGLE MOBILE --}}
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


        {{-- MENU --}}
        <div class="collapse navbar-collapse" id="navbarNav">

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


                {{-- GALERY --}}
                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('ekstrakurikuler.index') }}"
                    >
                        Galery
                    </a>

                </li>


                {{-- BERITA --}}
                <li class="nav-item">

                    <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{ route('berita.index') }}"
                    >
                        Berita
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


{{-- ========================================================= --}}
{{-- HALAMAN BERITA --}}
{{-- ========================================================= --}}

<div class="berita-container">

    <h1>Berita SMKN 1 Cijati</h1>


    {{-- PESAN SUKSES --}}
    @if (session('success'))

        <div class="alert">
            {{ session('success') }}
        </div>

    @endif


    {{-- DAFTAR BERITA --}}
    @forelse ($beritas as $berita)

        <div class="berita-card">


            {{-- FOTO BERITA --}}
            @if ($berita->foto)

                @php

                    $namaFoto = basename(
                        str_replace('\\', '/', $berita->foto)
                    );

                @endphp


                @if (file_exists(public_path('images/berita/' . $namaFoto)))

                    <img
                        src="{{ asset('images/berita/' . $namaFoto) }}"
                        alt="{{ $berita->judul }}"
                        class="berita-image"
                    >

                @else

                    <div class="foto-kosong">
                        Foto tidak ditemukan
                    </div>

                @endif


            @else

                <div class="foto-kosong">
                    Tidak ada foto
                </div>

            @endif


            {{-- ISI BERITA --}}
            <div class="berita-content">

                <h2>
                    {{ $berita->judul }}
                </h2>


                <div class="tanggal">

                    Dipublikasikan:

                    {{ $berita->created_at
                        ? $berita->created_at->format('d F Y')
                        : '-'
                    }}

                </div>


                <p class="artikel">

                    {{ $berita->isi }}

                </p>


                {{-- DETAIL BERITA --}}
                <a
                    href="{{ route('berita.show', $berita->id) }}"
                    class="baca"
                >
                    Baca Selengkapnya →
                </a>

            </div>

        </div>


    @empty

        <p style="text-align:center;">
            Belum ada berita.
        </p>

    @endforelse

</div>


{{-- BOOTSTRAP JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>