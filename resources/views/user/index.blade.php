@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="mb-3">
                            {{-- tlacitko na pridanie noveho pouzivatela vdaka classe to neni link ale ukaze to ako tlacitko --}}
                            <a href="{{ route('user.create') }}" class="btn btn-success" role="button">Add new user</a>

                        </div>
                        {!! $grid->show()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
