<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        Your Name Here
                    </div>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="">hello</a></li>
                    <li><a href="">world</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>