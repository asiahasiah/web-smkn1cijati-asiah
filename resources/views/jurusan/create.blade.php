<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Jurusan - SMKN 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #0d6efd !important;
        }

        .navbar-brand img {
            object-fit: cover;
        }

        .page-wrapper {
            min-height: calc(100vh - 70px);
            padding: 50px 0;
        }

        .form-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.10);
            overflow: hidden;
        }

        .form-header {
            background: #0d6efd;
            color: white;
            padding: 25px;
        }

        .form-header h2 {
            margin: 0;
            font-weight: bold;
        }

        .form-body {
            padding: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            padding: 11px 14px;
        }

        .btn {
            border-radius: 8px;
        }

        .preview-box {
            width: 120px;
            height: 120px;
            border: 2px dashed #ced4da;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #f8f9fa;
            margin-top: 10px;
        }

        .preview-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                width="45"
                height="45"
                class="me-2 rounded-circle bg-white p-1"
                alt="Logo SMK N 1 Cijati"
            >

            SMK N 1 CIJATI
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/jurusan">Jurusan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/guru">Guru</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fasilitas">Fasilitas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/galeri">Galeri</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/ekstrakurikuler">
                        Ekstrakurikuler
                    </a>
                </li>

                @auth

                    <li class="nav-item d-none d-lg-block mx-2">
                        <span class="text-white opacity-50">|</span>
                    </li>

                    <li class="nav-item me-2">
                        <a
                            href="/admin"
                            class="btn btn-light text-primary fw-bold px-3 py-2 rounded-pill"
                        >
                            ⚙️ Admin
                        </a>
                    </li>

                    <li class="nav-item">

                        <form
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-inline"
                        >
                            @csrf

                            <button
                                type="submit"
                                class="btn btn-danger fw-bold px-3 py-2 rounded-pill"
                            >
                                Logout
                            </button>
                        </form>

                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>


<!-- CONTENT -->
<section class="page-wrapper">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 col-md-10">

                <div class="form-card">

                    <!-- HEADER -->
                    <div class="form-header">

                        <h2>
                            ➕ Tambah Jurusan
                        </h2>

                        <p class="mb-0 mt-2">
                            Tambahkan data kompetensi keahlian SMK Negeri 1 Cijati.
                        </p>

                    </div>


                    <!-- FORM -->
                    <div class="form-body">

                        @if($errors->any())

                            <div class="alert alert-danger">

                                <strong>Terjadi kesalahan!</strong>

                                <ul class="mb-0 mt-2">

                                    @foreach($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <form
                            action="{{ route('jurusan.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >

                            @csrf


                            <!-- KODE -->
                            <div class="mb-3">

                                <label
                                    for="kode"
                                    class="form-label"
                                >
                                    Kode Jurusan
                                </label>

                                <input
                                    type="text"
                                    class="form-control @error('kode') is-invalid @enderror"
                                    id="kode"
                                    name="kode"
                                    value="{{ old('kode') }}"
                                    placeholder="Contoh: RPL"
                                    required
                                >

                                @error('kode')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- NAMA -->
                            <div class="mb-3">

                                <label
                                    for="nama"
                                    class="form-label"
                                >
                                    Nama Jurusan
                                </label>

                                <input
                                    type="text"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    id="nama"
                                    name="nama"
                                    value="{{ old('nama') }}"
                                    placeholder="Contoh: Rekayasa Perangkat Lunak"
                                    required
                                >

                                @error('nama')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- DESKRIPSI -->
                            <div class="mb-3">

                                <label
                                    for="deskripsi"
                                    class="form-label"
                                >
                                    Deskripsi Jurusan
                                </label>

                                <textarea
                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                    id="deskripsi"
                                    name="deskripsi"
                                    rows="5"
                                    placeholder="Masukkan deskripsi jurusan..."
                                    required
                                >{{ old('deskripsi') }}</textarea>

                                @error('deskripsi')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- PELUANG KERJA -->
                            <div class="mb-3">

                                <label
                                    for="peluang_kerja"
                                    class="form-label"
                                >
                                    Peluang Kerja
                                </label>

                                <textarea
                                    class="form-control @error('peluang_kerja') is-invalid @enderror"
                                    id="peluang_kerja"
                                    name="peluang_kerja"
                                    rows="4"
                                    placeholder="Contoh: Web Developer, Software Engineer, Freelancer"
                                    required
                                >{{ old('peluang_kerja') }}</textarea>

                                @error('peluang_kerja')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- FOTO -->
                            <div class="mb-4">

                                <label
                                    for="foto"
                                    class="form-label"
                                >
                                    Foto / Logo Jurusan
                                </label>

                                <input
                                    type="file"
                                    class="form-control @error('foto') is-invalid @enderror"
                                    id="foto"
                                    name="foto"
                                    accept=".jpg,.jpeg,.png,.webp"
                                    onchange="previewImage(event)"
                                >

                                <div class="form-text">
                                    Format: JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                                </div>

                                @error('foto')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror


                                <div
                                    class="preview-box"
                                    id="previewContainer"
                                >
                                    <span class="text-muted">
                                        Preview
                                    </span>
                                </div>

                            </div>


                            <!-- BUTTON -->
                            <div class="d-flex gap-2">

                                <a
                                    href="{{ route('jurusan.index') }}"
                                    class="btn btn-secondary px-4"
                                >
                                    ← Kembali
                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-primary px-4"
                                >
                                    💾 Simpan Jurusan
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">

    <p class="mb-0">
        © 2026 SMK Negeri 1 Cijati
    </p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

function previewImage(event) {

    const input = event.target;

    const previewContainer =
        document.getElementById('previewContainer');

    if (input.files && input.files[0]) {

        const reader = new FileReader();

        reader.onload = function(e) {

            previewContainer.innerHTML =
                '<img src="' + e.target.result + '" alt="Preview Foto">';

        };

        reader.readAsDataURL(input.files[0]);

    } else {

        previewContainer.innerHTML =
            '<span class="text-muted">Preview</span>';

    }

}

</script>

</body>
</html>