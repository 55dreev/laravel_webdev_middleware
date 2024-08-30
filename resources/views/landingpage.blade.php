<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jet's Gaming Hub</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
        <div class="text-center">
            <p class="text-xl mt-4 text-black dark:text-white/70">Please enter your username to continue, or proceed as a guest.</p>

            <form action="{{ url('/user') }}" method="GET" class="form-container mt-6">
                @if (session('error'))
                    <p class="text-red-500">{{ session('error') }}</p>
                @endif
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" id="username" class="form-input" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="form-button">Submit</button>
                </div>
            </form>

            <div class="link-container mt-6">
                <a href="{{ url('/user') }}" class="continue-guest-link">Continue as Guest</a>
            </div>
        </div>
    </div>
</body>

</html>
