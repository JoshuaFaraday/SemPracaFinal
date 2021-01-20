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







    </div>

@endsection
