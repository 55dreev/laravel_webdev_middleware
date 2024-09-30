@extends('Components.Layout')

@php
    $title = 'Register';
@endphp

@push('styles')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endpush

@section('main-class', 'register')

@section('content') 
    <div class="content-wrapper">
        <div class="text-container">
            <h1>Welcome to Jet's Gaming Hub</h1>
            <p>Discover the latest and greatest in gaming!</p>

            <div class="link-container">
                <p>Already have an account?</p>
                <a href="{{ url('/login') }}" class="button-link">Login here</a>
            </div>
        </div>

        <div class="form-container">
            <form action="{{ url('/user') }}" method="POST">
                @csrf
                <h1>Register</h1>
                
                <div class="input-container">
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#B197FC" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                        <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" placeholder="Enter username" required>
                    </div>
                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#B197FC">
                            <path d="M466.5 83.71l-192-80c-8.203-3.422-17.81-3.422-26.02 0l-192 80C45.1 89.28 32 108.1 32 128.8v94.42C32 378.5 139.8 475.9 246.3 508.7c4.406 1.406 9.078 1.406 13.48 0C372.2 475.9 480 378.5 480 223.2V128.8C480 108.1 466.5 89.28 466.5 83.71zM371.3 182.6l-136 160C231.1 346.9 225.1 349.1 219.4 349.1c-5.844 0-11.72-2.531-15.81-7.469l-56-64c-8.562-9.812-7.469-24.88 2.344-33.41c9.812-8.562 24.88-7.469 33.41 2.344l40.47 46.3l120.7-141.8c8.656-9.812 23.75-10.88 33.41-2.219C378.8 157.7 379.9 172.8 371.3 182.6z"/>
                        </svg>
                        <input type="number" name="age" id="age" placeholder="Enter your age" required min="1" max="100">
                    </div>

                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#B197FC" d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z" />
                        </svg>
                        <input type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>

                    <div class="show-container">
                        <input type="checkbox" id="show-password" onclick="togglePassword()"> Show Password
                    </div>

                    <div class="input-group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#B197FC" d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z" />
                        </svg>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required>
                    </div>

                    <div id="password-error">
                        Passwords do not match!
                    </div>
                </div>

                <button type="submit">Register</button>

                <div class="link-container">
                    <p>or</p>
                    <a href="{{ url('/guest') }}" class="button-link">Continue as Guest</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endpush
