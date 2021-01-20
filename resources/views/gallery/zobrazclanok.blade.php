@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-header">{{ __('zobrazclanok') }}</div>
                @foreach($galleries as $gallery)

                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"> {{$gallery['citanicko']}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
