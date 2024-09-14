@extends('Components.Layout')

@section('body-class', 'homepage')

@section('content')
    <h1>Welcome to Jet's Gaming Hub</h1>
    <p>Discover the latest and greatest in gaming!</p>
    <form action="{{ url('/user') }}" method="GET">
        <label for="username">Enter your username:</label>
        <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <br>or<br>

    <div class="link-container">
        <a href="{{ url('/user') }}" class="button-link">Continue as Guest</a>
    </div>
@endsection