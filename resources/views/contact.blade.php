@extends('layouts.app')
@section('content')


    {{--<div class="contact background">--}}
    <div class="container-fluid">
        <h1 class="text-center">Contact Address</h1>
        <hr>
        <div class="row">


            <iframe
                src="https://maps.google.com/maps?q=University%20of%20%C5%BDilina&t=&z=13&ie=UTF8&iwloc=&output=embed"
                width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

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
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="img/obi-wan-ewan-series.webp" alt="card image">
                                        </p>
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
                                        <p class="card-text">Tu by mal byť nejaký ďalší text ale neviem čo tu mám
                                            dať.</p>
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
                                        <p><img class=" img-fluid" src="img/cbb7a7f8-f49c-46c7-b551-c32150e2445a.jpg"
                                                alt="card image"></p>
                                        <h4 class="card-title">Ellie</h4>
                                        <p class="card-text">A brave, 14-year-old girl, Ellie has grown up in this harsh
                                            world and it is all she has ever known. She’s an orphan who was raised in a
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
                                            franchise. She serves as the deuteragonist of The Last of Us, the playable
                                            protagonist of The Last of Us Part II[1] and The Last of Us: Left Behind,
                                            and the main character in The Last of Us: American Dreams. A
                                            nineteen-year-old survivor, Ellie is "mature beyond her years" as a result
                                            of the circumstances of her environment.[5] She is voiced and motion
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
                                        <p class="card-text">Runeterra has no shortage of valiant champions, but few are
                                            as tenacious as Poppy. Bearing the legendary hammer of Orlon, a weapon twice
                                            her size, this determined yordle has spent untold years searching in secret
                                            for the fabled “Hero of Demacia,” said to be its rightful wielder.</p>
                                        <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Just a yordle with a hammer</h4>
                                        <p class="card-text">Poppy was once a very different yordle. For as long as she
                                            could remember, she had been in search of a purpose. Feeling alienated by
                                            the chaotic whimsy of other yordles, she preferred to soak up stability and
                                            structure where she could find it. This drive brought her to the human
                                            settlements of western Valoran, where she gazed in wonder at the caravans
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

    {{--         </div>--}}

@endsection
