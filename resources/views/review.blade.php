<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Games</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
        <h1>{{ $username ?? 'Guest' }}'s Gaming Hub</h1>
            <nav>
                <a href="{{ url('resources/views/welcome') }}?username={{ $username }}">Homepage</a>
                <a href="{{ url('resources/views/gallery') }}?username={{ $username }}">Gallery</a>
                <a href="{{ url('resources/views/review') }}?username={{ $username }}">Reviews</a>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div >
            <div>
                <h1>Game Reviews</h1>
                <p>See my reviews on some great games.</p>
                
                <div class="game-gallery">
                    <div class="game-item">
                        <img src="{{ asset('img/gtav.jpg') }}" alt="Grand Theft Auto V" class="game-img">
                        <div>
                            <h2>Grand Theft Auto V</h2>
                            <p>
                                As a fan of gaming, I think that it would be difficult to have not heard of the Grand Theft Auto Series. 
                                The franchise has many games under it's belt, and while controversial, it still remains the modern go to game for the majority of the gaming community. 
                                The latest in the franchise, Grand Theft Auto V, is Rockstar Games love letter to all the fans of the franchise. 
                                The game is groundbreaking in its innovation and was ahead of its time. 
                                Due to this, the game had an immense popularity leading up to and on its release day. 
                                Does it live up to the hype? Lets find out.
                            </p>
                            <p>
                                Personally, I am a huge fan of open-world games and GTA V did not disappoint. 
                                The game is very amazing graphically and gameplay wise. 
                                The game has many things for the player to do which makes its replay value higher. 
                                Add to that the amazing story and cast of characters just makes the game rich in development.  
                            </p>
                        </div>
                    </div>
                    
                    <div class="game-item">
                        <img src="{{ asset('img/valo.jpg') }}" alt="Valorant" class="game-img">
                        <div>
                            <h2>Valorant</h2>
                            <p>
                            I am a huge fan of first-person shooter games, dating back all the way to the Left 4 Dead and even Half-Life games. 
                            Valorant was a breath of fresh air for me because of its unique gameplay. 
                            Unlike its counterparts like Counter Strike and Call of Duty, Valorant has unique abilities and agents. 
                            It is similar to Overwatch but more tactical shooter an less power dominated games. 
                            Valorant is fun and challenging for new players and veterans of the game. 
                            There is much to learn about the system but once you do I can guarantee that you are gonna enjoy the game. 
                            The game is more enjoyable with friends so that the fun can be limitless. 
                            The bad sides of this game are present, like cheaters, toxic players and more but that doesn't outweigh all the good that is does.
                            </p>
                        </div>
                    </div>

                    <div class="game-item">
                        <img src="{{ asset('img/re4.jpg') }}" alt="Resident Evil 4" class="game-img">
                        <div>
                            <h2>Resident Evil 4</h2>
                            <p>
                            The resident evil games have become one of my favorite game series lately. 
                            Although, I have only played the remake versions of these games. 
                            The one game where I played both original and remake though is Resident Evil 4 and I must say that the original game might be considered a masterpiece. 
                            The game is very enjoyable and its story is very good. 
                            The cast of characters also add depth to this game as to not make it generic. 
                            The lead character Leon S. Kennedy has charm and a cool personality so scenes with him are never boring. 
                            The set pieces in this game are fantastic from a village, castle and a island you will always be amazed at the environment of this game. 
                            That says a lot considering this game came out so long ago. 
                            Overall, this game takes my excitement and keeps going until the end where you can appreciate the game even more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Jet's Gaming Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>