@extends('layouts.admin')

@section('title')
    Dashboard
    @endsection

@section('content')
    <div class="col-lg-12">
        <div class="col-lg-4">
            <h2>Greetings, {{ $user->name }}</h2>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-user"></span> Renter
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('user.create') }}">Register New Renter</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('user.index') }}"><span class="glyphicon glyphicon-th-list"></span> Show All Renter</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-cog"></span> Administrator Settings
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.create') }}"><span class="glyphicon glyphicon-user"></span> Register New Admin</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('admin.all') }}"><span class="glyphicon glyphicon-th-list"></span> Show All Admin</a></button>
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
                    <span class="glyphicon glyphicon-tags"></span> Rooms
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.create') }}"><span class="glyphicon glyphicon-plus"></span> Add New Room</a></button>
                    <button type="button" class="btn btn-warning btn-lg btn-block"><a href="{{ route('room.index') }}"><span class="glyphicon glyphicon-edit"></span> Change Room Number</a></button>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="{{ route('room.remove') }}"><span class="glyphicon glyphicon-minus"></span> Remove Room</a></button>
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.check_availability') }}">Check Room Availability</a></button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-stats"></span> Transaction Statistics
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 blue">
                        <h4>Total Transactions</h4>
                        <h2>{{ $transactions }}</h2>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-book"></span> Booking
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.create') }}"><span class="glyphicon glyphicon-pencil"></span> Room Booking</a></button>
                    <button type="button" class="btn btn-info btn-lg btn-block"><a href="{{ route('transaction.index') }}"><span class="glyphicon glyphicon-th-list"></span> Show All Booking History</a></button>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-usd"></span> Payments
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('payment.create') }}">Add Payment</a></button>
                    <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('payment.all') }}">Show Payment History</a></button>
                </div>
            </div>
        </div>
    </div>
    @endsection