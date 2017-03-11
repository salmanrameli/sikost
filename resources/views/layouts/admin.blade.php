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
                <a class="navbar-brand">SIKOST</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('admin.index') }}">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href={{ route('admin.create') }}>Renter Registration</a></li>
                            <li><a href="{{ route('admin.allUser') }}">View All Renter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Room
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('room.create') }}">Register New Room</a></li>
                            <li><a href="{{ route('room.check_availability') }}">Check Room Availability</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Booking & Transaction
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('transaction.index') }}">Show All Transactions</a></li>
                            <li><a href="{{ route('transaction.create') }}">Room Booking</a></li>
                        </ul>
                    </li>
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
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </body>
    <footer>
        <div class="page-footer"></div>
    </footer>
</html>