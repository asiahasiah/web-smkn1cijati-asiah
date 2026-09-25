<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login Admin - SMK N 1 Cijati</title>


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

        * {
            box-sizing: border-box;
        }


        body {

            margin: 0;

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            font-family: Arial, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd,
                    #0a58ca
                );
        }


        /* =================================================
           CONTAINER LOGIN
           ================================================= */

        .login-container {

            width: 100%;

            max-width: 430px;

            padding: 20px;
        }


        /* =================================================
           CARD LOGIN
           ================================================= */

        .login-card {

            background: white;

            border-radius: 20px;

            padding: 40px 35px;

            box-shadow:
                0 15px 40px
                rgba(0, 0, 0, 0.20);
        }


        /* =================================================
           LOGO
           ================================================= */

        .logo-login {

            width: 90px;

            height: 90px;

            object-fit: contain;

            background: white;

            border-radius: 50%;

            padding: 5px;

            box-shadow:
                0 4px 15px
                rgba(0, 0, 0, 0.15);
        }


        /* =================================================
           JUDUL
           ================================================= */

        .login-title {

            color: #0a58ca;

            font-weight: 700;

            margin-top: 15px;
        }


        .login-subtitle {

            color: #6c757d;

            font-size: 14px;
        }


        /* =================================================
           INPUT
           ================================================= */

        .form-control {

            height: 50px;

            border-radius: 10px;

            border: 1px solid #ced4da;
        }


        .form-control:focus {

            border-color: #0d6efd;

            box-shadow:
                0 0 0 0.2rem
                rgba(13, 110, 253, 0.15);
        }


        /* =================================================
           TOMBOL LOGIN
           ================================================= */

        .btn-login {

            width: 100%;

            height: 50px;

            border-radius: 10px;

            font-weight: 700;

            background: #0d6efd;

            border: none;

            transition: 0.3s;
        }


        .btn-login:hover {

            background: #0a58ca;

            transform: translateY(-1px);
        }


        /* =================================================
           KEMBALI
           ================================================= */

        .back-home {

            color: #0d6efd;

            text-decoration: none;

            font-size: 14px;
        }


        .back-home:hover {

            text-decoration: underline;
        }


        /* =================================================
           ERROR
           ================================================= */

        .alert {

            border-radius: 10px;

            font-size: 14px;
        }

    </style>

</head>


<body>


<div class="login-container">

    <div class="login-card">


        {{-- =================================================
             LOGO SEKOLAH
             ================================================= --}}

        <div class="text-center">

            <img
                src="{{ asset('images/logo-smkn1.pgn.png') }}"
                class="logo-login"
                alt="Logo SMK N 1 Cijati"
            >


            <h3 class="login-title">

                LOGIN ADMIN

            </h3>


            <p class="login-subtitle">

                SMK Negeri 1 Cijati

            </p>

        </div>



        {{-- =================================================
             PESAN BERHASIL
             ================================================= --}}

        @if(session('success'))

            <div
                class="alert alert-success"
                role="alert"
            >

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif



        {{-- =================================================
             PESAN ERROR
             ================================================= --}}

        @if($errors->any())

            <div
                class="alert alert-danger"
                role="alert"
            >

                <i class="bi bi-exclamation-triangle-fill me-2"></i>

                {{ $errors->first() }}

            </div>

        @endif



        {{-- =================================================
             FORM LOGIN
             ================================================= --}}

        <form
            action="{{ url('/login') }}"
            method="POST"
        >

            @csrf


            {{-- EMAIL --}}

            <div class="mb-3">

                <label
                    for="email"
                    class="form-label fw-semibold"
                >

                    Email / Gmail

                </label>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-envelope"></i>

                    </span>


                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Masukkan email admin"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >

                </div>

            </div>



            {{-- PASSWORD --}}

            <div class="mb-4">

                <label
                    for="password"
                    class="form-label fw-semibold"
                >

                    Password

                </label>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-lock"></i>

                    </span>


                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >

                </div>

            </div>



            {{-- TOMBOL LOGIN --}}

            <button
                type="submit"
                class="btn btn-primary btn-login"
            >

                <i class="bi bi-box-arrow-in-right me-2"></i>

                Login Admin

            </button>

        </form>



        {{-- =================================================
             KEMBALI KE WEBSITE
             ================================================= --}}

        <div class="text-center mt-4">

            <a
                href="/"
                class="back-home"
            >

                <i class="bi bi-arrow-left me-1"></i>

                Kembali ke Website

            </a>

        </div>

    </div>

</div>


</body>

</html>