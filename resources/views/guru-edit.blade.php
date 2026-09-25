<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body {
            background: linear-gradient(
                135deg,
                #f4f8ff,
                #ffffff
            );

            min-height: 100vh;
        }

        .edit-container {
            max-width: 650px;
            margin: 70px auto;
        }

        .edit-card {
            border: none;
            border-radius: 22px;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 35px;
        }

        .edit-title {
            color: #0a58ca;
            font-weight: 700;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 15px;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.10);
        }

        .btn-simpan {
            border-radius: 50px;
            padding: 11px 25px;
        }

        .btn-kembali {
            border-radius: 50px;
            padding: 11px 25px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="edit-container">

        <div class="edit-card">

            <div class="text-center mb-4">

                <i class="bi bi-pencil-square"
                   style="font-size: 45px; color: #0d6efd;">
                </i>

                <h2 class="edit-title mt-2">
                    Edit Data Guru
                </h2>

                <p class="text-muted">
                    Perbarui informasi data guru
                </p>

            </div>


            {{-- ERROR --}}

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- FORM EDIT --}}

            <form action="{{ route('guru.update', $guru->id) }}"
                  method="POST">

                @csrf

                @method('PUT')


                {{-- NIP --}}

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        NIP
                    </label>

                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        value="{{ old('nip', $guru->nip) }}"
                        required
                    >

                </div>


                {{-- NAMA --}}

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Guru
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ old('nama', $guru->nama) }}"
                        required
                    >

                </div>


                {{-- MAPEL --}}

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Mata Pelajaran
                    </label>

                    <input
                        type="text"
                        name="mapel"
                        class="form-control"
                        value="{{ old('mapel', $guru->mapel) }}"
                        required
                    >

                </div>


                {{-- BUTTON --}}

                <div class="d-flex gap-2">

                    <button type="submit"
                            class="btn btn-primary btn-simpan">

                        <i class="bi bi-save me-1"></i>

                        Simpan Perubahan

                    </button>


                    <a href="{{ route('guru.index') }}"
                       class="btn btn-secondary btn-kembali">

                        <i class="bi bi-arrow-left me-1"></i>

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>

</html>