@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container row-cols-5,">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Cyberpunk hotfix</h4>
                                <p>Improved driving mechanics for story NPCs while V's a passenger.
                                    Fixed rare crashes upon loading near end-game saves, and repaired some of the previously broken saves.
                                    Weapons should no longer get stuck when using gadgets (such as grenades) or shooting in quick succession.</p>
                               {{-- <a href="#">BUY NOW</a>--}}</div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/cyberpunk-2077-video-games-gun-3d-yellow-background-hd-wallpaper-preview.jpg"
                                                                                 class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                <a href="#">BUY NOW</a></div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png"
                                                                                 class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                <a href="#">BUY NOW</a></div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png"
                                                                                 class="mx-auto" alt="slide"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
    <!--slide end-->

@endsection
