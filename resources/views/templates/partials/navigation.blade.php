<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/icons/cse_logo.png') }}" class="center-block" style="width: 32px"/>
            </a>
            <a class="navbar-brand" href="{{ route('home') }}">
                <strong>CSE '14</strong>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            @if(Auth::check())
                <form class="navbar-form navbar-left" role="serach" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Search For People">
                    </div>
                    <button type="submit" class="btn btn-defult">Search</button>
                </form>
            @endif

            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())
                    <li>
                        <a href="{{ route('list.index', ['type' => 'all'] ) }}">Full List</a>
                    </li>
                    <li><a href="{{ route('profile.index' , ['username' => Auth::User()->getIndexNumber()]) }}">
                            {{ Auth::user()->getName() }} (
                            {{ Auth::user()->getIndexNumber() }} )
                        </a>
                    </li>
                    <li><a href="{{ route('auth.logout') }}">Sign out</a></li>

                @else
                    <li>
                        <a href="{{ route('auth.login') }}">Sign In</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
