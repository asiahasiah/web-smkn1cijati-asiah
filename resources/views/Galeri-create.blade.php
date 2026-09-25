<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Galeri - SMK Negeri 1 Cijati</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body {
            background: #f4f8ff;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #0d6efd, #084298);
        }

        .form-card {
            border: none;
            border-radius: 22px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
        }

        .page-title {
            color: #0b3d91;
            font-weight: 800;
        }

        .upload-area {
            border: 2px dashed #0d6efd;
            border-radius: 18px;
            padding: 45px 20px;
            text-align: center;
            background: #f8fbff;
            cursor: pointer;
            transition: .3s;
        }

        .upload-area:hover {
            background: #eaf3ff;
        }

        .upload-icon {
            font-size: 55px;
            color: #0d6efd;
        }

        .preview-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .preview-item {
            height: 150px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .1);
            background: white;
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>

</head>

<body>

    <nav class="navbar navbar-dark shadow-sm">

        <div class="container">

            <a href="{{ route('galeri.index') }}"
               class="navbar-brand fw-bold">

                <i class="bi bi-images me-2"></i>

                Galeri SMK Negeri 1 Cijati

            </a>

        </div>

    </nav>


    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h2 class="page-title mb-1">
                    Tambah Galeri
                </h2>

                <p class="text-muted mb-0">
                    Satu kegiatan dapat memiliki banyak foto.
                </p>

            </div>

            <a href="{{ route('galeri.index') }}"
               class="btn btn-outline-primary">

                <i class="bi bi-arrow-left me-1"></i>

                Kembali

            </a>

        </div>


        @if ($errors->any())

            <div class="alert alert-danger">

                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0 mt-2">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="card form-card">

            <div class="card-body p-4 p-md-5">

                <form
                    action="{{ route('galeri.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf


                    <!-- JUDUL -->

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Judul Kegiatan
                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control form-control-lg"
                            value="{{ old('judul') }}"
                            placeholder="Contoh: Class Meeting 2026"
                            required>

                    </div>


                    <!-- TANGGAL -->

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Tanggal Kegiatan
                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            class="form-control"
                            value="{{ old('tanggal') }}">

                    </div>


                    <!-- DESKRIPSI -->

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="5"
                            placeholder="Deskripsi kegiatan...">{{ old('deskripsi') }}</textarea>

                    </div>


                    <!-- FOTO -->

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Foto Kegiatan
                        </label>

                        <label
                            for="foto"
                            class="upload-area w-100">

                            <i class="bi bi-cloud-arrow-up upload-icon"></i>

                            <h5 class="mt-3 fw-bold">
                                Pilih Banyak Foto
                            </h5>

                            <p class="text-muted mb-1">
                                Klik di sini untuk memilih foto
                            </p>

                            <small class="text-muted">
                                Kamu dapat memilih beberapa foto sekaligus.
                            </small>

                        </label>


                        <input
                            type="file"
                            name="foto[]"
                            id="foto"
                            class="d-none"
                            accept="image/jpeg,image/png,image/webp"
                            multiple
                            required>


                        <div id="jumlahFoto"
                             class="text-primary fw-semibold mt-3">
                        </div>


                        <div
                            id="preview"
                            class="preview-container">
                        </div>

                    </div>


                    <!-- BUTTON -->

                    <div class="d-flex justify-content-end gap-2">

                        <a
                            href="{{ route('galeri.index') }}"
                            class="btn btn-secondary px-4">

                            Batal

                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary px-4">

                            <i class="bi bi-save me-1"></i>

                            Simpan Galeri

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <script>

        const inputFoto = document.getElementById('foto');

        const preview = document.getElementById('preview');

        const jumlahFoto = document.getElementById('jumlahFoto');


        inputFoto.addEventListener('change', function () {

            preview.innerHTML = '';

            jumlahFoto.innerHTML = '';


            const files = this.files;


            if (files.length > 0) {

                jumlahFoto.innerHTML =
                    '<i class="bi bi-images me-1"></i> ' +
                    files.length +
                    ' foto dipilih';


                for (let i = 0; i < files.length; i++) {

                    const file = files[i];


                    if (!file.type.startsWith('image/')) {
                        continue;
                    }


                    const reader = new FileReader();


                    reader.onload = function (e) {

                        const item =
                            document.createElement('div');

                        item.className =
                            'preview-item';


                        item.innerHTML = `
                            <img
                                src="${e.target.result}"
                                alt="Preview foto">
                        `;


                        preview.appendChild(item);

                    };


                    reader.readAsDataURL(file);

                }

            }

        });

    </script>

</body>

</html>