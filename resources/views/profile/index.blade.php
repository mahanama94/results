@extends('templates.default')

@section('content')
    <div class="row">

        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            @include('profile.partials.userblock')

            @include('home.user')
        </div>
    </div>


@endsection