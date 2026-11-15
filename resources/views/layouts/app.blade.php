<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SIM-Surat')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <div class="brand">✉ SIM-SURAT</div>
        <nav>
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">▦ &nbsp; Dashboard</a>
            <a class="nav-link {{ request()->routeIs('surat-masuk.*') ? 'active' : '' }}" href="{{ route('surat-masuk.index') }}">↙ &nbsp; Surat Masuk</a>
            <a class="nav-link {{ request()->routeIs('surat-keluar.*') ? 'active' : '' }}" href="{{ route('surat-keluar.index') }}">↗ &nbsp; Surat Keluar</a>
        </nav>
    </aside>
    <main class="main-area">
        <header class="topbar">
            <span>{{ auth()->user()->name ?? 'Pengguna' }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-light" type="submit">Keluar</button>
            </form>
        </header>
        <section class="page">
            @yield('content')
        </section>
    </main>
</div>
</body>
</html>
