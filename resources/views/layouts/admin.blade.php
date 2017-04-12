<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                checkProfit();
                checkIncome();

                function checkProfit()
                {
                    var number = $('#profit_amount').text();
                    var b = number.split(' ');
                    var c = parseInt(b[1]);
                    if(c <= 0)
                    {
                        $('#profit').css({"background-color":"orangered"});
                    }
                    else
                    {
                        $('#profit').css({"background-color":"#37eb65"});
                    }
                }
                function checkIncome()
                {
                    var income = $('#income_amount').text();
                    var b = income.split(' ');
                    var c = parseInt(b[1]);
                    if(c <= 0)
                    {
                        $('#income').css({"background-color":"orangered"})
                    }
                    else
                    {
                        $('#income').css({"background-color":"#37eb65"})
                    }
                }
            });
        </script>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
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
                <a class="navbar-brand" href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-home"></span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Renter
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href={{ route('user.create') }}>Register New Renter</a></li>
                            <li><a href="{{ route('user.index') }}">Show Renters</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Rooms
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('room.create') }}">Add New Room</a></li>
                            <li><a href="{{ route('room.index') }}">Change Room Number</a></li>
                            <li><a href="{{ route('room.remove') }}">Remove Room</a></li>
                            <li><a href="{{ route('room.check_availability') }}">Check Room Availability</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Booking
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('transaction.create') }}">Room Booking</a></li>
                            <li><a href="{{ route('transaction.index') }}">Booking Histories</a></li>
                            <li><a href="{{ route('transaction.move') }}">Move to Another Room</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Admin Settings
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin.create') }}">Register New Admin</a></li>
                            <li><a href="{{ route('admin.all') }}">Show Administrators</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Payments
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('payment.create') }}">Add Payment</a></li>
                            <li><a href="{{ route('payment.index') }}">Payment Histories</a></li>
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
                        <div class="alert alert-danger alert-dismissable">
                            @foreach($errors->all() as $error)
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(Session::has('status'))
                        <br>
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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