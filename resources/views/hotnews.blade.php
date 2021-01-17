@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">


    <div class="container">
        <div class="row-6">
            <div class="col-6 col-sm-8 col-md-6 col-lg-4">
                <div class="card">



                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img
                            src="img/81Xlb8BpjVL._SL1500_.jpg"
                            class="img-fluid"
                        />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">

    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mask flex-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 col-12 order-md-1 order-2">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                <a href="#">BUY NOW</a></div>
                            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png"
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
