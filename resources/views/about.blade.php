@extends('layouts.app')
@section('content')


    <body>

    {{--<div class="background">--}}
    <div class="ml-4">
        We love games, we grew up with games and now we are doing our dream: working professionally with games.

        We do this by...


        <p>Gathering all relevant information about games in one place (a concept we call a "one-stop-infospot")
            Building social and exploratory features on top of this information
            Gathering a community of both Gamers and people from the game industry and let them communicate with each
            other,
            and
            Focusing on our users and let them decide on the design and features.
        </p>


    </div>


    <div class="container mt-5">
        <div class="row-2">
            <div class="col-10">

                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/the-last-of-us-joel-survivors.jpg" alt="joel" width="880" height="500"
                                 class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="img/mafia-definitive-edition-review.jpg" alt="mafiade" width="880" height="500"
                                 class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="img/league%20of%20legends%20wallpaper%2047%20-%201920x1080.jpg" alt="lol"
                                 width="880" height="500" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="img/valhala.jpg" alt="valhala" width="880" height="500" class="img-fluid">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>


                </div>

            </div>
        </div>
    </div>

    <div class="ml-4">


        This is IGDB.com, a gaming website for everyone that loves game.
        And if you love games as well, we are the
        gaming website for you.
        <p>
            Our End Game

            We wish to create Your ultimate gaming website.
        </p>
    </div>
    </body>

@endsection
