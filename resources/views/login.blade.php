@extends('Components.Layout')

@php
    $title = 'Login';
@endphp

@push('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

@section('main-class', 'login')

@section('content')
    <div class="content-wrapper">
        <div class="text-container">
            <h1>Welcome to Jet's Gaming Hub</h1>
            <p>Discover the latest and greatest in gaming!</p>

            <div class="link-container">
                <p>Don't have an account?</p>
                <a href="{{ url('/register') }}" class="button-link">Register here</a>
            </div>
        </div>

        <div class="form-container">
            <form action="{{ url('/user') }}" method="POST">
                @csrf
                <h1>Login</h1>
                
                <div class="input-container">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#B197FC" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                        <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" placeholder="Enter your username" required>
                    </div>

                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#B197FC" d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z" />
                        </svg>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>

                    <div class="show-container">
                        <input type="checkbox" id="show-password" onclick="togglePassword()"> Show Password
                    </div>
                </div>

                <button type="submit">Login</button>

                <div class="link-container">
                    <p>or</p>
                    <a href="{{ url('/user') }}" class="button-link">Continue as Guest</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush