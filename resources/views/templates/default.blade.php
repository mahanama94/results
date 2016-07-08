<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Semester 1 Results</title>
        <link rel="icon" href="{!! asset('icon/logo.jpg') !!}" type="image/gif" sizes="20x20">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="icon" href="{{ asset('assets/icons/cse_logo.min.png') }}">

        <script>

            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 2000);

        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-80350278-1', 'auto');
            ga('send', 'pageview');

        </script>

    </head>

    <body background="{!! asset('') !!}">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div>

        @include('templates.partials.navigation')

        <div class="container">
            @include('templates.partials.alert')
            @yield('content')

            @include('templates.partials.newchat')
        </div>

    </div>
        @include('templates.partials.footer')
    </body>
</html>