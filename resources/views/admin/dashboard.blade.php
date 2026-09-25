@extends('layouts.admin')

@section('title', 'Dashboard')

@section('styles')
<style>
    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    /* =========================
       AURORA BACKGROUND (dekoratif, bergerak terus-menerus)
    ========================= */

    .aurora {
        position: fixed;
        inset: 0;
        z-index: 0;
        overflow: hidden;
        pointer-events: none;
    }

    .aurora span {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        opacity: 0.35;
    }

    .aurora span:nth-child(1) {
        width: 380px;
        height: 380px;
        top: -120px;
        left: 20%;
        background: radial-gradient(circle, #818cf8, transparent 70%);
        animation: auroraMove1 22s ease-in-out infinite;
    }

    .aurora span:nth-child(2) {
        width: 300px;
        height: 300px;
        bottom: -100px;
        right: 10%;
        background: radial-gradient(circle, #4f46e5, transparent 70%);
        animation: auroraMove2 26s ease-in-out infinite;
    }

    .aurora span:nth-child(3) {
        width: 260px;
        height: 260px;
        bottom: 20%;
        left: 45%;
        background: radial-gradient(circle, #a5b4fc, transparent 70%);
        animation: auroraMove3 30s ease-in-out infinite;
    }

    @keyframes auroraMove1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(60px, 40px) scale(1.15); }
        66% { transform: translate(-40px, 70px) scale(0.9); }
    }

    @keyframes auroraMove2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-70px, -30px) scale(1.1); }
        66% { transform: translate(30px, -60px) scale(0.95); }
    }

    @keyframes auroraMove3 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(50px, -50px) scale(1.2); }
    }

    /* =========================
       ANIMATION KEYFRAMES
    ========================= */

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    @keyframes floatBlob {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-12px, 14px) scale(1.06); }
    }

    @keyframes floatBlobReverse {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(10px, -10px) scale(1.08); }
    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes wave {
        0%, 100% { transform: rotate(0deg); }
        15% { transform: rotate(14deg); }
        30% { transform: rotate(-8deg); }
        45% { transform: rotate(14deg); }
        60% { transform: rotate(-4deg); }
        75% { transform: rotate(10deg); }
    }

    @keyframes pulseRing {
        0% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.35); }
        70% { box-shadow: 0 0 0 10px rgba(79, 70, 229, 0); }
        100% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0); }
    }

    @keyframes iconFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
    }

    @keyframes livePulse {
        0% { box-shadow: 0 0 0 0 rgba(34,197,94,0.5); }
        70% { box-shadow: 0 0 0 8px rgba(34,197,94,0); }
        100% { box-shadow: 0 0 0 0 rgba(34,197,94,0); }
    }

    @keyframes growLine {
        to { width: 70px; }
    }

    .wave-emoji {
        display: inline-block;
        animation: wave 2.4s ease-in-out 0.6s infinite;
        transform-origin: 70% 70%;
    }

    /* =========================
       WELCOME CARD
    ========================= */

    .welcome-card {
        position: relative;
        overflow: hidden;
        background: linear-gradient(120deg, #4f46e5, #6366f1, #312e81, #4f46e5);
        background-size: 300% 300%;
        animation: gradientShift 8s ease infinite, fadeInUp 0.6s ease both;
        color: white;
        border-radius: 18px;
        padding: 30px;
        margin-bottom: 25px;
        box-shadow: 0 8px 25px rgba(79, 70, 229, 0.25);
    }

    .welcome-card::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255,255,255,0.08);
        right: -50px;
        top: -70px;
        animation: floatBlob 7s ease-in-out infinite;
    }

    .welcome-card::before {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
        right: 100px;
        bottom: -70px;
        animation: floatBlobReverse 9s ease-in-out infinite;
    }

    .welcome-card h2 {
        position: relative;
        z-index: 2;
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 8px;
        display: inline-block;
    }

    .welcome-card h2::after {
        content: "";
        display: block;
        height: 3px;
        width: 0;
        background: rgba(255,255,255,0.8);
        border-radius: 3px;
        margin-top: 6px;
        animation: growLine 1s ease 0.5s forwards;
    }

    .welcome-card p {
        position: relative;
        z-index: 2;
        margin: 0;
        font-size: 14px;
        opacity: 0.9;
    }

    /* =========================
       STATISTICS
    ========================= */

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 22px;
        display: flex;
        align-items: center;
        gap: 16px;
        box-shadow: 0 5px 18px rgba(0,0,0,0.05);
        border: 1px solid #edf1f5;
        transition: box-shadow 0.3s ease;
        opacity: 0;
        animation: fadeInUp 0.55s ease forwards;
        transform-style: preserve-3d;
        will-change: transform;
    }

    .stat-card:hover {
        box-shadow: 0 14px 28px rgba(79, 70, 229, 0.18);
    }

    .stat-icon {
        width: 55px;
        height: 55px;
        min-width: 55px;
        border-radius: 13px;
        background: #eef2ff;
        color: #4f46e5;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
        transition: background 0.35s ease, color 0.35s ease;
        animation: iconFloat 3.2s ease-in-out infinite;
    }

    .stat-card:nth-child(1) .stat-icon { animation-delay: 0s; }
    .stat-card:nth-child(2) .stat-icon { animation-delay: 0.4s; }
    .stat-card:nth-child(3) .stat-icon { animation-delay: 0.8s; }
    .stat-card:nth-child(4) .stat-icon { animation-delay: 1.2s; }

    .stat-card:hover .stat-icon {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
    }

    /* Titik "live" berkedip, dipakai pada kartu Status Website */
    .live-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #22c55e;
        margin-left: 6px;
        animation: livePulse 1.6s ease-in-out infinite;
        vertical-align: middle;
    }

    .stat-card h3 {
        font-size: 26px;
        font-weight: bold;
        color: #312e81;
        margin: 0 0 3px;
    }

    .stat-card p {
        margin: 0;
        color: #888;
        font-size: 13px;
    }

    /* =========================
       BOTTOM GRID
    ========================= */

    .bottom-grid {
        display: grid;
        grid-template-columns: 1.4fr 1fr;
        gap: 20px;
        position: relative;
        z-index: 1;
    }

    .panel {
        background: white;
        border-radius: 15px;
        padding: 23px;
        border: 1px solid #edf1f5;
        box-shadow: 0 5px 18px rgba(0,0,0,0.04);
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
        animation-delay: 0.35s;
    }

    .panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .panel-header h5 {
        margin: 0;
        font-size: 17px;
        color: #312e81;
        font-weight: bold;
    }

    .panel-header i {
        color: #4f46e5;
        font-size: 20px;
        transition: transform 0.4s ease;
    }

    .panel:hover .panel-header i {
        transform: rotate(20deg);
    }

    /* =========================
       ACTIVITY
    ========================= */

    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        padding: 13px 0;
        border-bottom: 1px solid #f0f2f5;
        transition: transform 0.25s ease;
    }

    .activity-item:hover {
        transform: translateX(4px);
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-icon {
        width: 38px;
        height: 38px;
        min-width: 38px;
        background: #eef2ff;
        color: #4f46e5;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, background 0.3s ease, color 0.3s ease;
    }

    .activity-item:hover .activity-icon {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        transform: scale(1.1);
    }

    .activity-item strong {
        display: block;
        color: #333;
        font-size: 13px;
        margin-bottom: 3px;
    }

    .activity-item span {
        font-size: 11px;
        color: #999;
    }

    /* =========================
       QUICK ACCESS
    ========================= */

    .quick-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .quick-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        text-decoration: none;
        color: #333;
        background: #f7f8ff;
        border: 1px solid #e7e9f7;
        border-radius: 12px;
        padding: 18px 10px;
        transition: background 0.3s ease, color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .quick-link i {
        font-size: 25px;
        color: #4f46e5;
        margin-bottom: 8px;
        transition: transform 0.35s ease, color 0.3s ease;
    }

    .quick-link span {
        font-size: 12px;
        font-weight: 600;
    }

    .quick-link:hover {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: white;
        transform: translateY(-4px);
        box-shadow: 0 10px 22px rgba(79, 70, 229, 0.3);
    }

    .quick-link:hover i {
        color: white;
        transform: scale(1.15) rotate(-6deg);
    }

    /* Stagger delay antar kartu statistik */
    .stats-grid:nth-of-type(1) .stat-card:nth-child(1) { animation-delay: 0.15s; }
    .stats-grid:nth-of-type(1) .stat-card:nth-child(2) { animation-delay: 0.22s; }
    .stats-grid:nth-of-type(1) .stat-card:nth-child(3) { animation-delay: 0.29s; }
    .stats-grid:nth-of-type(1) .stat-card:nth-child(4) { animation-delay: 0.36s; }

    .stats-grid:nth-of-type(2) .stat-card:nth-child(1) { animation-delay: 0.43s; }
    .stats-grid:nth-of-type(2) .stat-card:nth-child(2) { animation-delay: 0.50s; }
    .stats-grid:nth-of-type(2) .stat-card:nth-child(3) { animation-delay: 0.57s; }
    .stats-grid:nth-of-type(2) .stat-card:nth-child(4) { animation-delay: 0.64s; }

    .bottom-grid .panel:nth-child(2) { animation-delay: 0.45s; }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1100px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .bottom-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        *, *::before, *::after {
            animation-duration: 0.001ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.001ms !important;
        }
    }
</style>
@endsection

@section('content')

    <!-- Background aurora dekoratif, bergerak terus-menerus -->
    <div class="aurora">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- WELCOME -->
    <div class="welcome-card">
        <h2><span class="wave-emoji">👋</span> Selamat Datang di Dashboard Admin</h2>
        <p>Kelola informasi dan konten website SMK N 1 Cijati dengan mudah melalui panel administrator.</p>
    </div>

    <!-- =========================
         STATISTICS
    ========================== -->

    <div class="stats-grid">

        <!-- GURU -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-chalkboard-user"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahGuru }}">0</h3>
                <p>Total Guru</p>
            </div>
        </div>

        <!-- BERITA -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-newspaper"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahBerita }}">0</h3>
                <p>Total Berita</p>
            </div>
        </div>

        <!-- GALERI -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-images"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahGaleri }}">0</h3>
                <p>Total Galeri</p>
            </div>
        </div>

        <!-- SISWA -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-user-graduate"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="700">0</h3>
                <p>Total Siswa</p>
            </div>
        </div>

    </div>

    <!-- =========================
         STATISTICS TAMBAHAN
    ========================== -->

    <div class="stats-grid">

        <!-- JURUSAN -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-diagram-project"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahJurusan }}">0</h3>
                <p>Total Jurusan</p>
            </div>
        </div>

        <!-- FASILITAS -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-building"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahFasilitas }}">0</h3>
                <p>Total Fasilitas</p>
            </div>
        </div>

        <!-- EKSTRAKURIKULER -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-futbol"></i>
            </div>
            <div>
                <h3 class="count-up" data-target="{{ $jumlahEkstrakurikuler }}">0</h3>
                <p>Total Ekstrakurikuler</p>
            </div>
        </div>

        <!-- STATUS WEBSITE -->
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fa fa-globe"></i>
            </div>
            <div>
                <h3>Aktif <span class="live-dot"></span></h3>
                <p>Status Website</p>
            </div>
        </div>

    </div>

    <!-- =========================
         BOTTOM CONTENT
    ========================== -->

    <div class="bottom-grid">

        <!-- AKTIVITAS -->
        <div class="panel">

            <div class="panel-header">
                <h5>Aktivitas Website</h5>
                <i class="fa fa-chart-line"></i>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fa fa-chalkboard-user"></i>
                </div>
                <div>
                    <strong>Data Guru</strong>
                    <span>{{ $jumlahGuru }} data guru tersedia</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fa fa-newspaper"></i>
                </div>
                <div>
                    <strong>Data Berita</strong>
                    <span>{{ $jumlahBerita }} berita tersedia</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fa fa-images"></i>
                </div>
                <div>
                    <strong>Data Galeri</strong>
                    <span>{{ $jumlahGaleri }} data galeri tersedia</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fa fa-building"></i>
                </div>
                <div>
                    <strong>Fasilitas Sekolah</strong>
                    <span>{{ $jumlahFasilitas }} fasilitas tersedia</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fa fa-diagram-project"></i>
                </div>
                <div>
                    <strong>Jurusan</strong>
                    <span>{{ $jumlahJurusan }} jurusan tersedia</span>
                </div>
            </div>

        </div>

        <!-- AKSES CEPAT -->
        <div class="panel">

            <div class="panel-header">
                <h5>Akses Cepat</h5>
                <i class="fa fa-table-cells"></i>
            </div>

            <div class="quick-grid">

                <a href="{{ route('guru.create') }}" class="quick-link">
                    <i class="fa fa-user-plus"></i>
                    <span>Tambah Guru</span>
                </a>

                <a href="{{ route('admin.berita.create') }}" class="quick-link">
                    <i class="fa fa-file-circle-plus"></i>
                    <span>Tambah Berita</span>
                </a>

                <a href="{{ route('admin.galeri.create') }}" class="quick-link">
                    <i class="fa fa-image"></i>
                    <span>Tambah Galeri</span>
                </a>

                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="quick-link">
                    <i class="fa fa-futbol"></i>
                    <span>Ekstrakurikuler</span>
                </a>

                <a href="{{ route('admin.fasilitas.index') }}" class="quick-link">
                    <i class="fa fa-building"></i>
                    <span>Fasilitas</span>
                </a>

                <a href="{{ url('/') }}" target="_blank" class="quick-link">
                    <i class="fa fa-globe"></i>
                    <span>Lihat Website</span>
                </a>

            </div>

        </div>

    </div>

@endsection

@section('scripts')
<script>
    // Animasi angka statistik (count-up) dari 0 ke nilai asli
    document.addEventListener('DOMContentLoaded', function () {
        var els = document.querySelectorAll('.count-up');

        els.forEach(function (el) {
            var target = parseInt(el.getAttribute('data-target'), 10) || 0;
            var duration = 900; // ms
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                // easeOutQuad
                var eased = 1 - (1 - progress) * (1 - progress);
                var value = Math.floor(eased * target);
                el.textContent = value;

                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    el.textContent = target;
                }
            }

            window.requestAnimationFrame(step);
        });
    });

    // Efek tilt 3D ringan saat kursor di atas kartu statistik
    document.addEventListener('DOMContentLoaded', function () {
        var cards = document.querySelectorAll('.stat-card');

        cards.forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = ((y - centerY) / centerY) * -4;
                var rotateY = ((x - centerX) / centerX) * 4;

                card.style.transform =
                    'perspective(600px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-4px)';
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = 'perspective(600px) rotateX(0) rotateY(0) translateY(0)';
            });
        });
    });
</script>
@endsection