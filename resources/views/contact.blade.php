@extends('layouts.app')
@section('content')


{{--<div class="contact background">--}}
                <div class="container-fluid">
                    <h1 class="text-center">Contact Address</h1>
                    <hr>
                    <div class="row">


                        <iframe src="https://maps.google.com/maps?q=University%20of%20%C5%BDilina&t=&z=13&ie=UTF8&iwloc=&output=embed"width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                    <div class="row text-center">
                        <div class="col-4 box1 pt-4">
                            <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
                                <h3 class="d-none d-lg-block d-xl-block">Phone</h3>
                                <p class="d-none d-lg-block d-xl-block">+042 456 879</p></a>
                        </div>
                        <div class="col-4 box2 pt-4">
                            <a href=""><i class="fas fa-home fa-3x"></i>
                                <h3 class="d-none d-lg-block d-xl-block">Address</h3>
                                <p class="d-none d-lg-block d-xl-block">Univerzitná 8215/1, 010 26 Žilina</p></a>
                        </div>
                        <div class="col-4 box3 pt-4">
                            <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
                                <h3 class="d-none d-lg-block d-xl-block">E-mail</h3>
                                <p class="d-none d-lg-block d-xl-block">uniza@mail.com</p></a>
                        </div>
                    </div>
                </div>





<section id="team" class="pb-2">
    <div class="container ">
        <h5 class="section-title h1">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-sm-6 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/obi-wan-ewan-series.webp" alt="card image"></p>
                                    <h4 class="card-title">General Kenobi</h4>
                                    <p class="card-text">General Kenobi je našim hlavným adminom.</p>
                                    <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">General Kenobi</h4>
                                    <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám dať.</p>
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
                                    <p><img class=" img-fluid" src="img/cbb7a7f8-f49c-46c7-b551-c32150e2445a.jpg" alt="card image"></p>
                                    <h4 class="card-title">Ellie</h4>
                                    <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám dať.</p>
                                    <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Ellie</h4>
                                    <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám dať.</p>

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
                                    <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám dať.</p>
                                    <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Ellie</h4>
                                    <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám dať.</p>

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

{{--         </div>--}}

@endsection
