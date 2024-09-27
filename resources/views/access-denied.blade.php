@extends('Components.layout')

@php
    $title = 'Access Denied';
@endphp

@push('styles')
    <link href="{{ asset('css/access-denied.css') }}" rel="stylesheet">
@endpush

@section('body-class', 'font-sans antialiased dark:bg-black dark:text-white/50')

@section('main-class', 'main-content')

@section('content')
    <div class="blur-background"></div>

    <div class="center-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100" class="circle-x-icon">
            <!-- Outer Circle -->
            <circle cx="50" cy="50" r="48" class="outer-circle" />
            
            <!-- X shape -->
            <line x1="30" y1="30" x2="70" y2="70" class="cross-line" />
            <line x1="70" y1="30" x2="30" y2="70" class="cross-line" />
        </svg>

        <h1>Access Denied</h1>
        <p>You must be at least 18 years old to access this content.</p>
    </div>
@endsection
    
