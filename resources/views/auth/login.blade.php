@extends("templates.default")

@section('content')
	<h3>Sign In</h3>
    <hr>
	<div class ="row">
		<div class="col-lg-3"></div>

		<div class="col-lg-6">

            <div class="marquee">
                <p>ME1032 Mechanics results now available!</p>
                <p>Await for CS 1032 Programming Fundamentals results!</p>
            </div>

			<form class="form-vertical" role="form" method="post" action="{{ route('auth.login') }}">
				<div class="form-group{{ $errors->has('admNum') ? ' has-error' : '' }}">
					<label for="username" class ="control-label">Your Index Number</label>

					<input type="text" name="admNum" class="form-control" id="admNum" placeholder="123456" maxlength="6">
					@if ($errors->has('admNum'))
						<span class="helper-block">{{str_replace("adm num","Index Number",$errors->first('admNum'))}}</span>
					@endif
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember Me
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-default center-block">Sign In</button>
				</div>
				<input type="hidden" name="_token" value="{{ Session::token() }}" >
			</form>
		</div>
	</div>

    <div class="row">

        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <div class="fb-comments" data-href="http://bsc15.avix.lk/" data-numposts="5"></div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-3"></div>

        <div class="col-lg-6">

            <div class="well well-sm alert-info">
                <p class="text-justify">
                    <icon class="glyphicon glyphicon-info-sign"></icon>
                    The information transmitted through this application is confidential and intended solely for the use of the individual
                    to whom they are addressed.
                    If you are not the named addressee you should not disseminate, distribute or copy this information.
                    The sender therefore does not accept liability for any errors or omissions in the contents of this application,
                    which arise as a result of data transmission
                </p>
            </div>

            <div class=" well well-sm alert-warning">
                <p class="text-justify">
                    <icon class="glyphicon glyphicon-warning-sign"></icon>
                    Although the admin has taken reasonable precautions to ensure no errors are present in this information,
                    the admin cannot accept responsibility for any loss or uncertainty arising from the use of this application
                    or information
                </p>
            </div>
        </div>
    </div>
@stop