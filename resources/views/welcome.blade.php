@extends('Components.Layout')

@section('body-class', 'homepage')

@section('content')
    <div class="main-content">
        <h1>Welcome to Jet's Gaming Hub</h1>
        <p>Discover the latest and greatest in gaming!</p>
        <form action="{{ url('/user') }}" method="GET">
            <div class="form-group">
                <label for="username">Enter your username:</label>
                <input type="text" name="username" id="username" pattern="[A-Za-z]+" title="Only alphabetic characters are allowed" class="form-input" placeholder="Enter your username">
            </div>
            <div class="form-actions">
                <button type="submit" class="form-button">Submit</button>
            </div>
        </form>

        <br>or<br>

        <div class="link-container">
            <a href="{{ url('/user') }}" class="button-link">Continue as Guest</a>
        </div>
    </div>
@endsection
