@extends('layouts.app')
@section('content')
    <head>
        <style>
            .card {
                width: 315px;
                height: 400px;
            }
        </style>

    </head>


    <div class="container">
        <div class="row-6">
            @foreach($gallery as $row)

                    <div class="card float-left">

                      {{--  <a href="{{route( 'gallery.zobrazclanok',$row ['citanicko'])}}" class="btn btn-primary">Read More</a>--}}
                        <div class="bg-image hover-overlay ripple float-left" data-mdb-ripple-color="light">
                            <img
                                src="{{$row['cesta']}}"
                                class="img-fluid"
                            />
                        </div>
                        <div class="card-body">

                            <h5 class="card-title"><mark>{{$row['title']}}</h5></mark>
                            <p class="card-text">{{$row['text']}}
                            </p>

                        </div>
                    </div>

            @endforeach
        </div>
    </div>

@endsection
