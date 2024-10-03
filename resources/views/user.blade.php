@extends('Components.Layout')

@php
    $title = 'Welcome User';
@endphp

@section('body-class', 'homepage')

@section('content')
    <h1>Welcome, {{ $username }}</h1>
    <p>Enjoy exploring the gaming hub!</p>
        <p>Status: {{ $verificationStatus }}</p> <!-- Display the verification status -->
    <button class="button" onclick="location.href='{{ url('/gallery') }}'">Explore Gallery</button>
@endsection