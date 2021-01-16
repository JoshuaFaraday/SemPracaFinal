<!DOCTYPE html>
<html>
<head>
    <title>AdkovaGameDatabase</title>
 {{--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/app.css">--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  {{--  <link rel="stylesheet" href="public/css/app.css">--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">


</head>
<body>






    <!-- Brand/logo -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand img-fluid" href="?c=Home">
            <img src="img/databazaUpravena.png" alt="database">
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-sm-left" href="?c=Home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?c=Home&a=Contact">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?c=Home&a=About">About</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="?c=blog&a=add">Add Review</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?c=blog">Reviews</a>
            </li>


            <li><a href="#">Page 2</a></li>
        </ul>
       {{-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
--}}


        @if (Route::has('login'))
            <ul class="text-right">
                @auth
                    <a href="{{ url('/home') }}" class="text-right text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-right text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-right   text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </ul>
        @endif

    </div>
</nav>


{{--
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="?c=Home">
    <img src="img/game__storage__play__server__database-512.png" alt="database">
    </a>


    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?c=Home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=Home&a=Kontakt">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?c=Home&a=About">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?c=blog&a=add">Pridat recenziu</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?c=blog">Recenzie</a>
            </li>

<div
            @if (Route::has('login'))
                <ul class="text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-right   text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </ul>
            @endif
        </ul>
    </div>


    </div>
</nav>

</body>
</html>
--}}


<div class="container mt-2">

    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="img/thumb-1920-1065466.png" alt="tlou2">
        </div>
        <div class="col-8"><h1>The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and
                published
                by Sony Interactive Entertainment for the PlayStation 4. Set five years after The Last of Us (2013), the
                player controls two characters in a post-apocalyptic United States whose lives intertwine: Ellie, who
                sets
                out for revenge after suffering a tragedy, and Abby, a soldier who becomes involved in a conflict with a
                cult. The game is played from the third-person perspective. Players can use firearms, improvised
                weapons,
                and stealth to fight human enemies and cannibalistic creatures. </h1>
        </div>

    </div>

</div>

<div class="container mt-2">

    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="img/league%20of%20legends%20wallpaper%2047%20-%201920x1080.jpg" alt="lolko">
        </div>

        <div class="col-8"><h2>League of Legends (abbreviated LoL or League) is a 2009 multiplayer online battle arena
                video game developed and published by Riot Games for Microsoft Windows and macOS. In League of Legends,
                players form a team of five and assume the role of a champion, characters with
                unique abilities, generally varying around a type of class, and battle against a team of player- or
                computer-controlled champions. In the main game mode, Summoner's Rift, the goal is to destroy the
                opposing team's Nexus, a structure that lies at the heart of their base and is protected by defensive
                structures. </h2>
        </div>
    </div>

</div>


<div class="container mt-2">

    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="img/the_witcher_3___wallpaper_hd_4k_by_seiikya_d989ila-fullview.jpg"
                 alt="witcher">
        </div>
        <div class="col-8"><h1>Witcher 3: Wild Hunt is a 2015 action role-playing game developed and published by
                Polish developer CD Projekt Red and is based on The Witcher series of fantasy novels written by Andrzej
                Sapkowski. It is the sequel to the 2011 game The Witcher 2: Assassins of Kings and the third main
                installment in the The Witcher's video game series, played in an open world with a third-person
                perspective.

                The game takes place in a fictional fantasy world based on Slavonic mythology.Players control
                protagonist Geralt of Rivia, a monster slayer for hire known as a Witcher who is looking for his missing
                adopted daughter on the run from the Wild Hunt. </h1>
        </div>

    </div>

</div>


<div class="container mt-2">

    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="img/Spellbreak_Hero_4k.jpg" alt="spellbreak">
        </div>
        <div class="col-8"><h2>Spellbreak is a multiplayer action-spellcasting game where you unleash your inner
                battlemage. Master elemental magic to fit your playstyle and cast powerful spell combinations to
                dominate other players across the Hollow Lands. There is one legendary player named Elmer Karas which stealing
                all kills.</h2>
        </div>

    </div>

</div>
</body>
</html>

