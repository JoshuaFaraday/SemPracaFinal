
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">{{ __('All reviews') }}</div>
                @foreach($reviews as $review)

                    <div class="form-group text-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$review['popis']}}</h4>
                            <p class="card-text">{{$review['text']}}
                            </p>
                            <p class="card-text"> {{$review['hodnotenie']}}
                                of 100 points
                            </p>

                        @auth
                            @if(Auth::user()->email === 'Admin@stranka.sk')
                               {{-- <a href={{route( 'reviewsEdit',$review ['id'])}} class="btn-primary">Edit</a>--}}
                                <a href="{{route( 'reviews.delete',$review ['id'])}}" class="btn-sm btn-danger">Delete</a>
                                @endif

                            @endauth

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
