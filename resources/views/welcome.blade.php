<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Games</title>
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

    <main>
        <h1>Welcome to Jet's Gaming Hub</h1>
        <p>Discover the latest and greatest in gaming!</p>
        <form action="{{ url('/user') }}" method="GET">
            <label for="username">Enter your username:</label>
            <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed">
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </main>

</body>
</html>