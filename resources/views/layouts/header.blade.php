<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Portofolio Zala Risky Pratama' }}</title>

    <!-- Favicon Logo -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Feather Icons CDN for clean UI icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Stylesheets (Loaded from resources/css/app.css via Vite with fallback) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif
    @yield('styles')
</head>
<body>

    <!-- Header Navbar -->
    <header class="site-header">
        <div class="container navbar">
            <a href="{{ route('beranda') }}" class="brand-logo">
                <div class="brand-badge-frame">
                    <img src="{{ asset('images/logo.png') }}" alt="Skull Logo" class="brand-badge-img">
                </div>
                <div>
                    <span class="brand-name">Zala</span><span class="brand-suffix">.dev</span>
                </div>
            </a>

            <nav>
                <ul class="nav-menu">
                    <li>
                        <a href="{{ route('beranda') }}" class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}">
                            <i data-feather="home" style="width: 16px; height: 16px;"></i> Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('datadiri') }}" class="nav-link {{ request()->routeIs('datadiri') ? 'active' : '' }}">
                            <i data-feather="user" style="width: 16px; height: 16px;"></i> Data Diri
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('aktivitas') }}" class="nav-link {{ request()->routeIs('aktivitas') ? 'active' : '' }}">
                            <i data-feather="activity" style="width: 16px; height: 16px;"></i> Aktivitas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}" class="nav-link {{ request()->routeIs('kontak') || request()->routeIs('hubungi') ? 'active' : '' }}">
                            <i data-feather="mail" style="width: 16px; height: 16px;"></i> Kontak
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('halo') }}" class="nav-link {{ request()->routeIs('halo') ? 'active' : '' }}">
                            <i data-feather="code" style="width: 16px; height: 16px;"></i> Pengantar
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Opening -->
    <main class="main-content">
