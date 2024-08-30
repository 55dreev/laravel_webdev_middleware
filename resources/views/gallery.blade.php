<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Games</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
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
            <h1 >Gallery of Games</h1>
            <p >Explore some very great set of games.</p>

            <div class="game-gallery">
                <div class="game-item">
                    <img src="{{ asset('img/gtav.jpg') }}" alt="Grand Theft Auto V" class="game-img">
                    <div>
                        <h2 >Grand Theft Auto V</h2>
                        <p>
                            Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. 
                            It is the seventh main entry in the Grand Theft Auto series, following 2008's Grand Theft Auto IV, and the fifteenth instalment overall.
                        </p>
                        <p>
                            Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three protagonists—retired bank robber 
                            Michael De Santa (Ned Luke), street gangster Franklin Clinton (Shawn Fonteno), and drug dealer and gunrunner Trevor Philips (Steven Ogg), and their attempts 
                            to commit heists while under pressure from a corrupt government agency and powerful criminals. Players freely roam San Andreas's open world countryside and fictional city of Los Santos, 
                            based on Los Angeles.
                        </p>
                        <button onclick="window.location.href='{{ url('resources/views/review.blade.php') }}'">
                            See review
                        </button>    
                    </div>
                </div>

                <div class="game-item ">
                    <img src="{{ asset('img/valo.jpg') }}" alt="Valorant" class="game-img">
                    <div>
                        <h2>Valorant</h2>
                        <p>
                            VALORANT is a free-to-play first-person tactical shooter video game being developed and published by Riot Games.
                            It was announced on October 15, 2019 under the codename "Project A", until it was officially revealed as VALORANT on March 2, 2020. It was officially released on June 2nd, 2020 for PC.
                            By the time VALORANT reached its first anniversary, the game had 14 million active monthly players and Riot announced the game would soon be coming to mobile platforms, with console platforms also being explored but not as high a priority. 
                            Of the two platforms however, it was console that arrived first with a limited beta starting on June 14, 2024.
                        </p>
                        <p>
                            VALORANT takes place on a version of Earth in the near future following an event known as First Light. This event spans the entire globe, leading to big transformations to life, technology, and how governments operate. 
                            However, select people across the globe start to gain abilities stemming from this massive event. These gifted individuals are called Radiants.
                            In response to First Light, a shadow organization founds the VALORANT Protocol, which pulls together agents from all over the world. These Agents consist of Radiants and other individuals equipped with Radiant technology. 
                            Due to the backstories of these characters, the VALORANT team features interesting dynamics as the individuals not only sometimes know each other, but they also come from a wide spectrum of backgrounds ranging from crime to the military.
                        </p>
                        <button onclick="window.location.href='{{ url('resources/views/review.blade.php') }}'" >
                            See review
                        </button> 
                    </div>
                </div>

                <div class="game-item">
                    <img src="{{ asset('img/re4.jpg') }}" alt="Resident Evil 4" class="game-img">
                    <div>
                        <h2>Resident Evil 4</h2>
                        <p>
                            Resident Evil 4 is a 2005 survival horror game developed and published by Capcom for the GameCube. 
                            Players control the special agent Leon S. Kennedy on a mission to rescue the US president's daughter, Ashley Graham, who has been kidnapped by a religious cult in rural Spain. 
                            Leon fights hordes of enemies infected by a mind-controlling parasite and reunites with the spy Ada Wong. 
                            In a departure from the fixed camera angles and slower gameplay of previous Resident Evil games, Resident Evil 4 features a dynamic camera system and action-oriented gameplay.
                        </p>
                        <button onclick="window.location.href='{{ url('resources/views/review.blade.php') }}'">
                            See review
                        </button> 
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