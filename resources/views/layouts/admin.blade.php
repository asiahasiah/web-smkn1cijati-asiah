<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-w: 250px;
            --primary: #4f46e5;
            --primary-dark: #3730a3;
        }
        * { font-family: 'Poppins', sans-serif; }
        body {
            background: #f4f5fa;
            margin: 0;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0; left: 0; bottom: 0;
            width: var(--sidebar-w);
            background: linear-gradient(180deg, #1e1b4b 0%, #312e81 100%);
            color: #fff;
            z-index: 1000;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }
        .sidebar-brand {
            padding: 22px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .sidebar-brand img { width: 38px; height: 38px; object-fit: contain; }
        .sidebar-brand h6 { margin: 0; font-weight: 600; font-size: 14px; line-height: 1.3; }
        .sidebar-brand small { color: #c7d2fe; font-size: 11px; }

        .sidebar-menu { padding: 16px 12px; list-style: none; margin: 0; }
        .sidebar-menu .menu-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #818cf8;
            padding: 10px 12px 6px;
            font-weight: 600;
        }
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 10px;
            color: #c7d2fe;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
            transition: all 0.2s ease;
        }
        .sidebar-menu li a i { width: 18px; text-align: center; font-size: 15px; }
        .sidebar-menu li a:hover {
            background: rgba(255,255,255,0.08);
            color: #fff;
        }
        .sidebar-menu li a.active {
            background: linear-gradient(135deg, var(--primary), #6366f1);
            color: #fff;
            box-shadow: 0 4px 12px rgba(79,70,229,0.4);
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: var(--sidebar-w);
            min-height: 100vh;
        }

        .topbar {
            background: #fff;
            padding: 14px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 6px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 900;
        }
        .topbar-toggle {
            display: none;
            border: none;
            background: none;
            font-size: 20px;
            color: #4b5563;
        }
        .topbar-title { font-weight: 600; color: #1f2937; font-size: 16px; }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .topbar-user .avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #818cf8);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }
        .topbar-user .name { font-size: 14px; font-weight: 500; color: #1f2937; line-height: 1.2; }
        .topbar-user .role { font-size: 11px; color: #9ca3af; }

        .page-body { padding: 28px; }

        /* Responsive */
        @media (max-width: 991px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
            .topbar-toggle { display: block; }
        }
    </style>
    @yield('styles')
</head>
<body>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('logo-sekolah.png') }}" onerror="this.style.display='none'" alt="logo">
            <div>
                <h6>SMKN 1 Cijati</h6>
                <small>Admin Panel</small>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-label">Menu Utama</li>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa fa-gauge-high"></i> Dashboard
                </a>
            </li>

            <li class="menu-label">Konten</li>
            <li>
                <a href="{{ route('admin.berita.index') }}" class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                    <i class="fa fa-newspaper"></i> Berita
                </a>
            </li>
            <li>
                <a href="{{ route('admin.galeri.index') }}" class="{{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                    <i class="fa fa-images"></i> Galeri
                </a>
            </li>
            <li>
                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="{{ request()->routeIs('admin.ekstrakurikuler.*') ? 'active' : '' }}">
                    <i class="fa fa-futbol"></i> Ekstrakurikuler
                </a>
            </li>

            <li class="menu-label">Data Sekolah</li>
            <li>
                <a href="{{ route('admin.guru.index') }}" class="{{ request()->routeIs('admin.guru.*') ? 'active' : '' }}">
                    <i class="fa fa-chalkboard-user"></i> Guru
                </a>
            </li>
            <li>
                <a href="{{ route('admin.jurusan.index') }}" class="{{ request()->routeIs('admin.jurusan.*') ? 'active' : '' }}">
                    <i class="fa fa-diagram-project"></i> Jurusan
                </a>
            </li>
            <li>
                <a href="{{ route('admin.fasilitas.index') }}" class="{{ request()->routeIs('admin.fasilitas.*') ? 'active' : '' }}">
                    <i class="fa fa-building"></i> Fasilitas
                </a>
            </li>
            {{--
                Menu "Profil Sekolah" disembunyikan sementara.
                Alasan: route('admin.profil.index') sudah terdaftar, tapi
                ProfilController belum punya method adminIndex() dan
                view resources/views/admin/profil/index.blade.php belum dibuat,
                sehingga saat ini klik menu ini menghasilkan error 500.
                Aktifkan kembali blok <li> di bawah ini setelah:
                  1. ProfilController@adminIndex() dibuat
                  2. view admin/profil/index.blade.php dibuat
            --}}
            {{--
            <li>
                <a href="{{ route('admin.profil.index') }}" class="{{ request()->routeIs('admin.profil.*') ? 'active' : '' }}">
                    <i class="fa fa-school"></i> Profil Sekolah
                </a>
            </li>
            --}}

            <li class="menu-label">Akun</li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" style="color:#fca5a5;">
                        <i class="fa fa-right-from-bracket"></i> Logout
                    </a>
                </form>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="topbar-toggle" onclick="document.getElementById('sidebar').classList.toggle('show')">
                    <i class="fa fa-bars"></i>
                </button>
                <span class="topbar-title">@yield('title', 'Admin Panel')</span>
            </div>

            <div class="topbar-user">
                <div class="text-end d-none d-sm-block">
                    <div class="name">{{ auth()->user()->name ?? 'Administrator' }}</div>
                    <div class="role">Admin</div>
                </div>
                <div class="avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
            </div>
        </div>

        <div class="page-body">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>