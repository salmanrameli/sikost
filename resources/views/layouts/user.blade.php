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
            <div class="banner">
            </div>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Your Name Here</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('user.index') }}">Home</a></li>
                        <li><a href="">Page 1</a></li>
                        <li><a href="">Page 2</a></li>
                        <li><a href="">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="row">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(Session::has('status'))
                        <br>
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-1"></div>
            @yield('content')
        </div>
    </body>
</html>