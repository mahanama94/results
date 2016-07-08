@extends('templates.default')

@section('content')

    <h3>Full List</h3>
    <hr>

    <table class="table">
        <thead>
        <tr>
            <th>Index Number</th>
            <th>GPA</th>
            <th>Rank</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->getINdexNumber() }}</td>
                <td>{{ $user->getGPA() }}</td>
                <td>{{ $user->getRank() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection