<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $username ?? 'Guest' }}'s Gaming Hub</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="homepage">
    <header>
        <div class="header-container">
            <h1>{{ $username ?? 'Guest' }}'s Gaming Hub</h1>
            <nav>
                <a href="{{ url('resources/views/welcome') }}?username={{ $username }}">Homepage</a>
                <a href="{{ url('resources/views/gallery') }}?username={{ $username }}">Gallery</a>
                <a href="{{ url('resources/views/review') }}?username={{ $username }}">Reviews</a>
                <a href="{{ url('resources/views/contact') }}?username={{ $username }}">Contact Us</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-black dark:text-white">
                    Welcome to {{ $username ?? 'Jet' }}'s Gaming Hub
                </h1>
                <p class="text-xl mt-4 text-black dark:text-white/70">Your destination for gaming reviews, and more!</p>
                <a href="{{ url('resources/views/gallery') }}?username={{ $username }}">
                    <button class="mt-6 px-6 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-black hover:text-white transition duration-300">
                        Explore Now
                    </button>
                </a>
            </div>
        </div>
    </main>
</body>

</html>
