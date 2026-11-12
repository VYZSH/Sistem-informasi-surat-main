
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Informasi Surat')</title>
</head>
<body>

@auth
    <span>Masuk sebagai: {{ auth()->user()->name }}</span>
    <form method="POST" action="{{ route('logout') }}" style="display:inline">
        @csrf
        <button type="submit">Keluar</button>
    </form>
@endauth

    <h2>Sistem Informasi Surat</h2>

    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('surat-masuk.index') }}">Surat Masuk</a> |
        <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <p>Sistem Informasi Surat</p>

</body>
</html>
