@extends('templates.default')

@section('content')

    <h3>Full List</h3>
    <div class="btn-group">
        <button type="button" class="btn btn-default" href="{{ route('list.index', ['type' => 'all'] ) }}">ALL</button>
        <button type="button" class="btn btn-default" href="{{ route('list.index', ['type' => 'all'] ) }}">MPR</button>
        <button type="button" class="btn btn-default" href="{{ route('list.index', ['type' => 'all'] ) }}">EM</button>
        <button type="button" class="btn btn-default" href="{{ route('list.index', ['type' => 'all'] ) }}">TM</button>
        <button type="button" class="btn btn-default" href="{{ route('list.index', ['type' => 'all'] ) }}">TLM</button>
    </div>
    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>Index Number</th>
            <th>Name </th>
            <th>GPA</th>
            <th>Rank</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{ route('profile.index' , ['username' => $user->getIndexNumber()]) }}">
                        {{ $user->getINdexNumber() }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('profile.index' , ['username' => $user->getIndexNumber()]) }}">
                        {{ $user->getName() }}
                    </a>
                </td>
                <td>{{ $user->getGPA() }}</td>
                <td>{{ $user->getRank() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection