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
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('user.create') }}">Register New Renter</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('user.index') }}"><span class="glyphicon glyphicon-th-list"></span> Show Renters</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-cog"></span> Administrator Settings
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.create') }}"><span class="glyphicon glyphicon-user"></span> Register New Admin</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('admin.all') }}"><span class="glyphicon glyphicon-th-list"></span> Show Administrators</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Expenses Settings
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('expenses_categories.create') }}">New Expenses Category</a></button>
                    <button type="button" class="btn btn-warning btn-lg btn-block"><a href="{{ route('expenses_categories.index') }}"><span class="glyphicon glyphicon-edit"></span> Edit Expenses Name</a></button>
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
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('payment.create') }}"><span class="glyphicon glyphicon-usd"></span> Add Payment</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('payment.index') }}"><span class="glyphicon glyphicon-th-list"></span> Payment Histories</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Expenses
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('expenses.create') }}">New Expenses Payment</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('expenses.index') }}"><span class="glyphicon glyphicon-th-list"></span> Expenses Payment Histories</a></button>
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
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-book"></span> Booking
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.create') }}"><span class="glyphicon glyphicon-pencil"></span> Room Booking</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('transaction.index') }}"><span class="glyphicon glyphicon-th-list"></span> Booking Histories</a></button>
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.move') }}">Move to Another Room</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-tags"></span> Rooms
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.create') }}"><span class="glyphicon glyphicon-plus"></span> Add New Room</a></button>
                    <button type="button" class="btn btn-warning btn-lg btn-block"><a href="{{ route('room.index') }}"><span class="glyphicon glyphicon-edit"></span> Change Room Number</a></button>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="{{ route('room.remove') }}"><span class="glyphicon glyphicon-minus"></span> Remove Room</a></button>
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.check_availability') }}"><span class="glyphicon glyphicon-search"></span> Check Room Availability</a></button>
                </div>
            </div>
        </div>
    </div>
    @endsection