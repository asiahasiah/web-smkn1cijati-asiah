<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Galeri - SMK Negeri 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #f4f8ff;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #0d6efd, #084298);
        }

        .navbar-brand {
            font-weight: 700;
        }

        .navbar-brand img {
            width: 42px;
            height: 42px;
            object-fit: contain;
            margin-right: 10px;
        }

        .page-header {
            background: linear-gradient(135deg, #0d6efd, #084298);
            color: white;
            padding: 55px 0;
            margin-bottom: 40px;
        }

        .page-header h1 {
            font-weight: 800;
        }

        .main-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }

        .form-label {
            font-weight: 700;
            color: #173b73;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid #d7e2f3;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.12);
        }

        .btn-primary {
            border-radius: 12px;
            font-weight: 700;
            padding: 11px 20px;
        }

        .btn-secondary {
            border-radius: 12px;
            font-weight: 700;
            padding: 11px 20px;
        }

        .foto-card {
            border: 1px solid #e0e8f5;
            border-radius: 15px;
            overflow: hidden;
            background: white;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.06);
        }

        .foto-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .foto-body {
            padding: 12px;
        }

        .upload-box {
            border: 2px dashed #b8c9e5;
            border-radius: 15px;
            padding: 25px;
            background: #f8fbff;
            text-align: center;
        }

        .upload-box i {
            font-size: 40px;
            color: #0d6efd;
        }

        .section-title {
            font-weight: 800;
            color: #084298;
            margin-bottom: 20px;
        }

        footer {
            background: #062b63;
            color: white;
            margin-top: 60px;
            padding: 25px 0;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo-smkn1.pgn.png') }}" alt="Logo">
            <span>SMK Negeri 1 Cijati</span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil') }}">
                        Profil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jurusan.index') }}">
                        Jurusan
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.index') }}">
                        Guru
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fasilitas.index') }}">
                        Fasilitas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('galeri.index') }}">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ekstrakurikuler.index') }}">
                        Ekstrakurikuler
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}">
                        Kontak
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- HEADER -->
<section class="page-header">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1>
                    <i class="bi bi-pencil-square me-2"></i>
                    Edit Galeri
                </h1>

                <p class="mb-0">
                    Kelola informasi dan foto kegiatan sekolah.
                </p>

            </div>

            <div class="col-md-4 text-md-end mt-3 mt-md-0">

                <a href="{{ route('galeri.index') }}"
                   class="btn btn-light">

                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali ke Galeri

                </a>

            </div>

        </div>

    </div>
</section>


<!-- CONTENT -->
<div class="container mb-5">

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show rounded-4">

            <i class="bi bi-check-circle-fill me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    @if($errors->any())

        <div class="alert alert-danger rounded-4">

            <strong>
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                Terjadi kesalahan:
            </strong>

            <ul class="mb-0 mt-2">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <div class="main-card">

        <form action="{{ route('galeri.update', $galeri->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')


            <!-- INFORMASI GALERI -->
            <h4 class="section-title">
                <i class="bi bi-info-circle-fill me-2"></i>
                Informasi Galeri
            </h4>

            <div class="row g-4">

                <div class="col-md-8">

                    <label class="form-label">
                        Judul Kegiatan
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control"
                           value="{{ old('judul', $galeri->judul) }}"
                           placeholder="Masukkan judul kegiatan"
                           required>

                </div>


                <div class="col-md-4">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ old('tanggal', optional($galeri->tanggal)->format('Y-m-d')) }}">

                </div>


                <div class="col-12">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan deskripsi kegiatan">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>

                </div>

            </div>


            <hr class="my-5">


            <!-- FOTO LAMA -->
            <h4 class="section-title">
                <i class="bi bi-images me-2"></i>
                Foto Saat Ini
            </h4>

            @if($galeri->fotos->count() > 0)

                <div class="row g-4">

                    @foreach($galeri->fotos as $foto)

                        <div class="col-6 col-md-4 col-lg-3">

                            <div class="foto-card">

                                <img src="{{ asset('storage/' . $foto->foto) }}"
                                     alt="Foto Galeri">

                                <div class="foto-body">

                                    <a href="{{ asset('storage/' . $foto->foto) }}"
                                       target="_blank"
                                       class="btn btn-outline-primary btn-sm w-100">

                                        <i class="bi bi-eye me-1"></i>
                                        Lihat Foto

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="alert alert-warning rounded-4">

                    <i class="bi bi-info-circle me-2"></i>

                    Belum ada foto pada galeri ini.

                </div>

            @endif


            <hr class="my-5">


            <!-- TAMBAH FOTO -->
            <h4 class="section-title">
                <i class="bi bi-cloud-arrow-up-fill me-2"></i>
                Tambah Foto
            </h4>

            <div class="upload-box">

                <i class="bi bi-images"></i>

                <h5 class="mt-3 fw-bold">
                    Tambahkan Foto Baru
                </h5>

                <p class="text-muted">
                    Kamu dapat memilih beberapa foto sekaligus.
                </p>

                <input type="file"
                       name="foto[]"
                       id="foto"
                       class="form-control"
                       accept="image/jpeg,image/png,image/webp"
                       multiple>

                <div class="mt-3 text-muted small">
                    Format: JPG, JPEG, PNG, WEBP.
                    Maksimal 5 MB per foto.
                </div>

            </div>


            <!-- PREVIEW FOTO BARU -->
            <div id="previewContainer"
                 class="row g-4 mt-3">
            </div>


            <hr class="my-5">


            <!-- BUTTON -->
            <div class="d-flex flex-wrap gap-2 justify-content-end">

                <a href="{{ route('galeri.index') }}"
                   class="btn btn-secondary">

                    <i class="bi bi-x-circle me-1"></i>
                    Batal

                </a>


                <button type="submit"
                        class="btn btn-primary">

                    <i class="bi bi-save me-1"></i>
                    Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>


<!-- FOOTER -->
<footer>

    <div class="container text-center">

        <div class="fw-bold">
            SMK Negeri 1 Cijati
        </div>

        <div class="small mt-1">
            Website Resmi SMK Negeri 1 Cijati
        </div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<script>

    const inputFoto = document.getElementById('foto');

    const previewContainer = document.getElementById('previewContainer');


    inputFoto.addEventListener('change', function () {

        previewContainer.innerHTML = '';

        const files = this.files;


        if (files.length === 0) {
            return;
        }


        Array.from(files).forEach(function (file) {

            if (!file.type.startsWith('image/')) {
                return;
            }


            const reader = new FileReader();


            reader.onload = function (event) {

                const col = document.createElement('div');

                col.className = 'col-6 col-md-4 col-lg-3';


                col.innerHTML = `

                    <div class="foto-card">

                        <img src="${event.target.result}"
                             alt="Preview Foto">

                        <div class="foto-body">

                            <div class="small fw-bold text-truncate">
                                ${file.name}
                            </div>

                            <div class="small text-muted">
                                ${(file.size / 1024 / 1024).toFixed(2)} MB
                            </div>

                        </div>

                    </div>

                `;


                previewContainer.appendChild(col);

            };


            reader.readAsDataURL(file);

        });

    });

</script>

</body>
</html>