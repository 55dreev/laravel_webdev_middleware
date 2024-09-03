<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $username ?? 'Guest' }}'s Gaming Hub</title>
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
</head>

<body class="contact">
    <header>
        <div class="header-container">
            <h1>Jet's Gaming Hub</h1>
            <nav>
                <a href="{{ url('/') }}">Homepage</a>
                <a href="{{ url('resources/views/gallery.blade.php') }}">Gallery</a>
                <a href="{{ url('resources/views/review.blade.php') }}">Reviews</a>
                <a href="{{ url('resources/views/contact.blade.php') }}">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="form-container">
                <h1>Contact Us</h1>
                <form action="">
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" name="email" id="email" class="form-input" required>
                    <p id="emailHelp" class="form-text">We'll never share your email with anyone else.</p>
                </p>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message:</label>
                    <textarea name="message" id="message" class="textarea" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="form-button">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>