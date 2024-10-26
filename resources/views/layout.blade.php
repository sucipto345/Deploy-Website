<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portal.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
</head>
<body>

    @include('navbar') <!-- Memanggil Navbar -->

    <main>
        @yield('content') <!-- Bagian konten yang akan diisi oleh setiap halaman -->
    </main>

    @include('footer') <!-- Memanggil Footer -->

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
