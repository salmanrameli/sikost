@extends('layouts.admin')

@section('title')
    Dashboard
    @endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Greetings, {{ $user->name }}</h4>
                </div>
            </div>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-user"></span> Renter
                </div>
                <div class="panel-body">
                    <a href="{{ route('user.create') }}"><button type="button" class="btn btn-default btn-lg btn-block">Register New Renter</button></a><br>
                    <a href="{{ route('user.index') }}"><button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> Show Renters</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-cog"></span> Administrator Settings
                </div>
                <div class="panel-body">
                    <a href="{{ route('admin.create') }}"><button type="button" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-user"></span> Register New Admin</button></a><br>
                    <a href="{{ route('admin.all') }}"><button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> Show Administrators</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Expenses Settings
                </div>
                <div class="panel-body">
                    <a href="{{ route('expenses_categories.create') }}"><button type="button" class="btn btn-default btn-lg btn-block">New Expenses Category</button></a><br>
                    <a href="{{ route('expenses_categories.index') }}"><button type="button" class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-edit"></span> Edit Expenses Name</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-stats"></span> Transaction Statistics
                </div>
                <div class="panel-body">
                    <div class="col-lg-12" id="income">
                        <h4>This Month's Income</h4>
                        <h2 id="income_amount">Rp {{ $income }}</h2>
                    </div>
                    <div class="col-lg-12">
                        <br>
                    </div>
                    <div class="col-lg-12">
                        <h4>This Month's Expenses</h4>
                        <h2>Rp {{ $expenses }}</h2>
                    </div>
                    <div class="col-lg-12">
                        <br>
                    </div>
                    <div class="col-lg-12" id="profit">
                        <h4>This Month's Profit (Rp)</h4>
                        <h2 id="profit_amount">Rp {{ $profit }}</h2>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-usd"></span> Payments
                </div>
                <div class="panel-body">
                    <a href="{{ route('payment.create') }}"><button type="button" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-usd"></span> Add Payment</button></a><br>
                    <a href="{{ route('payment.index') }}"><button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> Payment Histories</button></a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Expenses
                </div>
                <div class="panel-body">
                    <a href="{{ route('expenses.create') }}"><button type="button" class="btn btn-default btn-lg btn-block">New Expenses Payment</button></a><br>
                    <a href="{{ route('expenses.index') }}"><button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> Expenses Payment Histories</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-stats"></span> Room Status
                </div>
                <div class="panel-body">
                    <div class="col-lg-6 red">
                        <h4>Booked Room</h4>
                        <h2>{{ $booked }}</h2>
                    </div>
                    <div class="col-lg-6 green">
                        <h4>Empty Room</h4>
                        <h2>{{ $empty }}</h2>
                    </div>
                    <div class="col-lg-12">
                        <br>
                        <a href="{{ route('room.check_availability') }}"><button type="button" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-search"></span> Check Room Availability</button></a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-book"></span> Booking
                </div>
                <div class="panel-body">
                    <a href="{{ route('transaction.create') }}"><button type="button" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-pencil"></span> Room Booking</button></a><br>
                    <a href="{{ route('transaction.index') }}"><button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-th-list"></span> Booking Histories</button></a><br>
                    <a href="{{ route('transaction.move') }}"><button type="button" class="btn btn-default btn-lg btn-block">Edit Booking</button></a><br>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-tags"></span> Rooms
                </div>
                <div class="panel-body">
                    <a href="{{ route('room.create') }}"><button type="button" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-plus"></span> Add New Room</button></a><br>
                    <a href="{{ route('room.index') }}"><button type="button" class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-edit"></span> Change Room Number</button></a><br>
                    <a href="{{ route('room.remove') }}"><button type="button" class="btn btn-danger btn-lg btn-block"><span class="glyphicon glyphicon-minus"></span> Remove Room</button></a>
                </div>
            </div>
        </div>
    </div>
    @endsection