<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - SMKN 1 Cijati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-blue: #1B63E0;
            --brand-blue-dark: #124EB8;
            --ink: #142942;
            --amber: #F2A93B;
            --bg: #F5F8FC;
            --card-line: #E3E9F3;
            --muted: #5E6E85;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: var(--bg);
            font-family: 'Inter', Arial, sans-serif;
            color: var(--ink);
            margin: 0;
        }

        h1, h2, h3, .brand-font {
            font-family: 'Sora', 'Inter', Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: var(--brand-blue) !important;
            box-shadow: 0 2px 14px rgba(27, 99, 224, .25);
            padding: 12px 0;
        }

        .navbar-brand {
            color: white !important;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            font-size: 19px;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 40px;
            width: 40px;
            object-fit: contain;
            margin-right: 10px;
            border-radius: 50%;
            background: white;
            padding: 3px;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,.85) !important;
            font-weight: 500;
            font-size: 15px;
            padding: 8px 14px !important;
            border-radius: 8px;
            transition: .2s;
        }

        .navbar-nav .nav-link:hover {
            color: #fff !important;
            background: rgba(255,255,255,.12);
        }

        .navbar-nav .nav-link.active {
            color: #fff !important;
            background: rgba(255,255,255,.18);
        }

        /* HERO */
        .kontak-hero {
            position: relative;
            background: linear-gradient(135deg, var(--brand-blue), var(--brand-blue-dark));
            color: white;
            text-align: center;
            padding: 60px 20px 54px;
        }

        .kontak-hero::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 4px;
            background: var(--amber);
        }

        .kontak-hero-icon {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,.15);
            border-radius: 50%;
            margin: 0 auto 16px;
            font-size: 28px;
        }

        .kontak-hero h1 {
            font-weight: 800;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .kontak-hero p {
            color: rgba(255,255,255,.85);
            font-size: 15.5px;
            max-width: 480px;
            margin: 0 auto;
        }

        /* CONTENT */
        .kontak-section {
            padding: 50px 0 70px;
        }

        .kontak-card {
            border: 1px solid var(--card-line);
            border-radius: 18px;
            background: white;
            padding: 32px;
            height: 100%;
        }

        .kontak-card-title {
            font-family: 'Sora', sans-serif;
            font-size: 17px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 22px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .kontak-card-title i {
            color: var(--brand-blue);
        }

        .info-row {
            display: flex;
            gap: 14px;
            margin-bottom: 22px;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: #E9F2FF;
            color: var(--brand-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .info-label {
            font-weight: 700;
            font-size: 14.5px;
            color: var(--ink);
            margin-bottom: 2px;
        }

        .info-value {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.6;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid var(--card-line);
            border-radius: 12px;
            padding: 14px 16px;
            margin-bottom: 12px;
            text-decoration: none;
            color: var(--ink);
            font-weight: 600;
            font-size: 14.5px;
            transition: .2s;
        }

        .social-link:last-child {
            margin-bottom: 0;
        }

        .social-link:hover {
            border-color: var(--brand-blue);
            background: #F5F9FF;
            color: var(--ink);
        }

        .social-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            color: white;
            flex-shrink: 0;
        }

        .social-icon.instagram {
            background: linear-gradient(135deg, #f58529, #dd2a7b, #8134af);
        }

        .social-icon.facebook {
            background: #1877F2;
        }

        .social-link .bi-box-arrow-up-right {
            margin-left: auto;
            color: var(--muted);
            font-size: 14px;
        }

        /* FOOTER */
        footer {
            background: var(--ink);
            color: rgba(255,255,255,.75);
            text-align: center;
            padding: 30px 15px 24px;
        }

        footer .footer-brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        footer .footer-brand img {
            height: 30px;
            width: 30px;
            object-fit: contain;
            border-radius: 50%;
            background: white;
            padding: 2px;
        }

        footer h5 {
            color: white;
            font-family: 'Sora', sans-serif;
            font-weight: 700;
            margin: 0;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .kontak-hero h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo-smkn1.pgn.png') }}" alt="Logo SMK N 1 Cijati">
            SMK N 1 CIJATI
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="/jurusan">Jurusan</a></li>
                <li class="nav-item"><a class="nav-link" href="/guru">Guru</a></li>
                <li class="nav-item"><a class="nav-link" href="/fasilitas">Fasilitas</a></li>
                <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link active" href="/kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="/ekstrakurikuler">Ekstrakurikuler</a></li>
            </ul>
        </div>

    </div>
</nav>

{{-- HERO --}}
<section class="kontak-hero">
    <div class="container">
        <div class="kontak-hero-icon">
            <i class="bi bi-envelope-paper-fill"></i>
        </div>
        <h1>Hubungi Kami</h1>
        <p>Ada pertanyaan seputar sekolah? Silakan hubungi kami melalui kontak di bawah ini.</p>
    </div>
</section>

{{-- ISI KONTEN KONTAK --}}
<section class="kontak-section">
    <div class="container">
        <div class="row g-4">

            {{-- INFORMASI SEKOLAH --}}
            <div class="col-md-6">
                <div class="kontak-card">

                    <div class="kontak-card-title">
                        <i class="bi bi-building"></i>
                        Informasi Sekolah
                    </div>

                    <div class="info-row">
                        <div class="info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="info-label">Alamat Sekolah</div>
                            <div class="info-value">
                                Jl. Raya Cijati, Kec. Cijati, Kab. Cianjur<br>
                                Jawa Barat 43282
                            </div>
                        </div>
                    </div>

                    <div class="info-row">
                        <div class="info-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <div class="info-label">Telepon</div>
                            <div class="info-value">(0263) 2361091</div>
                        </div>
                    </div>

                    <div class="info-row">
                        <div class="info-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="info-label">Email</div>
                            <div class="info-value">smkn1cijati@gmail.com</div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- JAM LAYANAN & MEDIA SOSIAL --}}
            <div class="col-md-6">
                <div class="kontak-card">

                    <div class="kontak-card-title">
                        <i class="bi bi-clock-fill"></i>
                        Jam Layanan
                    </div>

                    <div class="info-row">
                        <div class="info-icon">
                            <i class="bi bi-calendar-week-fill"></i>
                        </div>
                        <div>
                            <div class="info-label">Senin - Jumat</div>
                            <div class="info-value">07.00 - 15.00 WIB</div>
                        </div>
                    </div>

                    <hr class="my-4" style="border-color: var(--card-line);">

                    <div class="kontak-card-title">
                        <i class="bi bi-share-fill"></i>
                        Media Sosial
                    </div>

                    <a
                        href="https://instagram.com/smkn1cijatiofficial"
                        class="social-link"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="social-icon instagram">
                            <i class="bi bi-instagram"></i>
                        </span>
                        Instagram
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>

                    <a
                        href="https://facebook.com/smkn1cijatiofficial"
                        class="social-link"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="social-icon facebook">
                            <i class="bi bi-facebook"></i>
                        </span>
                        Facebook
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- FOOTER --}}
<footer>
    <div class="container">

        <div class="footer-brand">
            <img src="{{ asset('images/logo-smkn1.pgn.png') }}" alt="Logo SMK N 1 Cijati">
            <h5>SMK Negeri 1 Cijati</h5>
        </div>

        <p class="mb-1">© {{ date('Y') }} SMK Negeri 1 Cijati</p>
        <small>Semua Hak Dilindungi</small>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>