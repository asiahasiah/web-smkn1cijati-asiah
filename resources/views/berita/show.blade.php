<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $berita->judul }} - SMKN 1 Cijati</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .tanggal {
            color: #777;
            margin-bottom: 25px;
        }

        .foto-artikel {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .foto-kosong {
            padding: 50px;
            text-align: center;
            background: #ddd;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .isi {
            line-height: 1.8;
            white-space: pre-line;
        }

        .kembali {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>
        {{ $berita->judul }}
    </h1>

    <div class="tanggal">

        Dipublikasikan:

        {{ $berita->created_at
            ? $berita->created_at->format('d F Y')
            : '-'
        }}

    </div>


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
                class="foto-artikel"
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


    <div class="isi">
        {{ $berita->isi }}
    </div>


    <a
        href="{{ route('berita.index') }}"
        class="kembali"
    >
        ← Kembali ke Berita
    </a>

</div>

</body>

</html>