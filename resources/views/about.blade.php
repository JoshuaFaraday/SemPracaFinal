@extends('layouts.app')
@section('content')


    <head>
        <style>
            .card {
                width: 350px;
                height: 350px;
            }
        </style>
    </head>


    <body>

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

        <p>
        This is a gaming website for everyone that loves game.
        And if you love games as well, we are the
        gaming website for you.
        </p>
        <p>
            Our End Game

            We wish to create Your ultimate gaming website.
        </p>
    </div>

    <div class="contact">
        <section id="team" class="pb-2">
            <div class="container ">
                <h5 class="section-title h1">OUR TEAM</h5>
                <div class="row">
                    <!-- Team member -->
                    <div class="col-sm-6 col-sm-6 col-md-4">
                        <div class="image-flip">
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="img/obi-wan-ewan-series.webp"
                                                    alt="card image">
                                            </p>
                                            <h4 class="card-title">General Kenobi</h4>
                                            <p class="card-text">Obi-Wan Kenobi was a legendary human male Jedi Master
                                                who served on the Jedi High Council during the last years of the
                                                Republic Era. During the Imperial Era, he adopted the alias Ben Kenobi
                                                in order to hide from the regime that drove the Jedi to near
                                                extinction.</p>
                                            <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">General Kenobi</h4>
                                            <p class="card-text">Born on the planet Stewjon in 57 BBY, Kenobi joined the
                                                Jedi Order—an order of Force-sensitive peacekeepers—at a young age.
                                                Following his initial lessons under Grand Master Yoda, he became the
                                                Padawan of Jedi Master Qui-Gon Jinn. During the Invasion of Naboo in 32
                                                BBY, Kenobi defeated the Sith Lord Darth Maul and was awarded the status
                                                of Jedi Knight. As a result of Jinn's death, Kenobi took on the task of
                                                training Anakin Skywalker.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid"
                                                    src="img/cbb7a7f8-f49c-46c7-b551-c32150e2445a.jpg"
                                                    alt="card image"></p>
                                            <h4 class="card-title">Ellie</h4>
                                            <p class="card-text">A brave, 18-year-old girl, Ellie has grown up in this
                                                harsh
                                                world and it is all she has ever known. She’s an orphan who was raised
                                                in a
                                                boarding school run by the military within the bounds of the quarantine
                                                zone. </p>
                                            <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Ellie</h4>
                                            <p class="card-text">Ellie is the focal character in the The Last of Us
                                                franchise. She serves as the deuteragonist of The Last of Us, the
                                                playable
                                                protagonist of The Last of Us Part II and The Last of Us: Left
                                                Behind,
                                                and the main character in The Last of Us: American Dreams. A
                                                nineteen-year-old survivor, Ellie is "mature beyond her years" as a
                                                result
                                                of the circumstances of her environment. She is voiced and motion
                                                captured by Ashley Johnson. </p>

                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="img/pupy.png" alt="card image"></p>
                                            <h4 class="card-title">Just a yordle with a hammer</h4>
                                            <p class="card-text">Runeterra has no shortage of valiant champions, but few
                                                are
                                                as tenacious as Poppy. Bearing the legendary hammer of Orlon, a weapon
                                                twice
                                                her size, this determined yordle has spent untold years searching in
                                                secret
                                                for the fabled “Hero of Demacia,” said to be its rightful wielder.</p>
                                            <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Just a yordle with a hammer</h4>
                                            <p class="card-text">Poppy was once a very different yordle. For as long as
                                                she
                                                could remember, she had been in search of a purpose. Feeling alienated
                                                by
                                                the chaotic whimsy of other yordles, she preferred to soak up stability
                                                and
                                                structure where she could find it. This drive brought her to the human
                                                settlements of western Valoran, where she gazed in wonder at the
                                                caravans
                                                striping the countryside in an endless file. </p>

                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </section>
    </div>
    </body>

@endsection
