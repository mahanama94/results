@extends('templates.default')

@section('content')


    <h3>Results for "{{ Request::input('query') }}"</h3>

    @if (!$users->count())
        <p> No results found </p>
    @else
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @foreach ($users as $user)
                    @include('profile.partials.userblock')
                @endforeach
            </div>
        </div>
    @endif
@endsection