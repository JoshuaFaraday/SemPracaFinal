{{--
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Review') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth
                        <div class="mb-3">
                             tlacitko na pridanie noveho pouzivatela vdaka classe to neni link ale ukaze to ako tlacitko
                            <a href="{{ route('reviews.create') }}" class="btn btn-success" role="button">Add new review</a>

                        </div>
                            @endauth
                        --}}
{{--{!! $grid->show()!!}--}}{{--


                    </div>
                </div>
            </div>
        </div>
    </div>

--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">{{ __('All reviews') }}</div>
                @foreach($reviews as $reviews)
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$reviews['popis']}}</h4>
                            <p class="card-text">{{$reviews['text']}}
                            </p>
                            <p class="card-text"> {{$reviews['hodnotenie']}}
                                of 100 points
                            </p>

                        @auth
                                <a href="{{route( 'reviews.edit',$reviews ['id'])}}" class="btn-primary btn-sm ">Edit</a>
                                <a href="{{route( 'reviews.delete',$reviews ['id'])}}" class="btn-sm btn-danger">Delete</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


{{--

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @auth
            <div class="mb-3">
               --}}
{{-- tlacitko na pridanie noveho pouzivatela vdaka classe to neni link ale ukaze to ako tlacitko--}}{{--

                <a href="{{ route('reviews.create') }}" class="btn btn-success" role="button">Add new review</a>

            </div>
        @endauth

--}}








@endsection
