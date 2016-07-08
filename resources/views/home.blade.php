@extends('templates.default')

@section('content')

    @if( Auth::check())
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @include('home.user')
            </div>
        </div>
    @else
        @include('home.guest')
    @endif

@stop