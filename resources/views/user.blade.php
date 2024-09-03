<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="homepage">
    <header>
        <div class="header-container">
            <h1>Jet's Gaming Hub</h1>
            <nav>
                <a href="{{ url('/') }}">Homepage</a>
                <a href="{{ url('resources/views/gallery.blade.php') }}">Gallery</a>
                <a href="{{ url('resources/views/review.blade.php') }}">Reviews</a>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <h1>Welcome, {{ $username }}</h1>
        <p>Enjoy exploring the gaming hub, {{ $username }}!</p>
        <button class="button" onclick="location.href='{{ url('resources/views/gallery.blade.php') }}'">Explore Gallery</button>
    </main>
</body>
</html>