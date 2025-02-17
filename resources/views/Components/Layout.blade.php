<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Jet\'s Gaming Hub' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="@yield('body-class')">
<header>
    <div class="header-container">
        <h1>Jet's Gaming Hub</h1>
        <nav>
            @if(session('username') && session('username') !== 'Guest')
                <span>Welcome, {{ session('username') }}</span>
                <a href="{{ url('/logout') }}">Logout</a>
            @elseif(session('username') === 'Guest')
                <span>Welcome, Guest</span>
            @endif
            <a href="{{ url('/') }}">Homepage</a>
            <a href="{{ url('/gallery') }}">Gallery</a>
            <a href="{{ url('/review') }}">Reviews</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </div>
</header>

<main class="@yield('main-class')">
    @yield('content')
</main>

<footer>
    <div class="footer-container">
        <p>&copy; 2024 Jet's Gaming Hub. All rights reserved.</p>
    </div>
</footer>

@stack('scripts')
</body>
</html>
