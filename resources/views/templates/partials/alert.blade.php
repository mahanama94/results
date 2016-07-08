@if (Session::has('info'))

    <div class="alert alert-info fade in alert-dismissable" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <icon class="glyphicon glyphicon-info-sign"></icon>
        {{ Session::get('info') }}
    </div>

@endif

@if(Session::has('success'))
    <div class="alert alert-success fade in alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <icon class="glyphicon glyphicon-ok"></icon>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning fade in alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <icon class="glyphicon glyphicon-warning-sign"></icon>
        {{ Session::get('warning') }}
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger fade in alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('danger') }}
    </div>
@endif