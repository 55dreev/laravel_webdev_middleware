@extends('Components.Layout')

@section('title', 'Welcome User')

@section('body-class', 'homepage')

@section('content')
    <h1>Welcome, {{ $username }}</h1>
    <p>Enjoy exploring the gaming hub!</p>
    <button class="button" onclick="location.href='{{ url('/gallery') }}'">Explore Gallery</button>
@endsection