<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Alat Musik')</title>
    <link rel="stylesheet" href="{{ asset('Bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .welcome-navbar {
            background-color: #172554;
            padding: 0.5rem 0;
        }

        .welcome-navbar .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #ffffff !important;
            font-family: Georgia, "Times New Roman", serif;
            font-weight: 700;
            font-size: 0.92rem;
            letter-spacing: 0.4px;
        }

        .welcome-navbar .navbar-brand:hover {
            color: #D4A853 !important;
        }

        .welcome-navbar .brand-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #D4A853;
            color: #172554;
            flex: 0 0 auto;
        }

        .welcome-navbar .brand-icon svg {
            width: 16px;
            height: 16px;
        }

        .welcome-navbar .nav-link {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 600;
            font-size: 0.88rem;
            margin-left: 0.15rem;
            padding: 0.38rem 0.7rem !important;
            border-radius: 0.6rem;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .welcome-navbar .nav-link:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .welcome-navbar .nav-link.active {
            color: #172554;
            background-color: #D4A853;
            font-weight: 700;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark welcome-navbar shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                <span class="brand-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                    </svg>
                </span>
                <span>Sistem Penjualan Alat Musik</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('instruments.*') ? 'active' : '' }}" href="{{ route('instruments.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('Bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
