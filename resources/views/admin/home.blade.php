@extends('layouts.admin')

@section('title')
    Admin Home
    @endsection

@section('content')
    <h2>Greetings, {{ $user->name }}</h2>
    <br>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Renter
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.create') }}">Renter Registration</a></button>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.allUser') }}">View All Registered Renter</a></button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Rooms
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.create') }}">Register New Room</a></button>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.check_availability') }}">Check Room Availability</a></button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Booking & Transaction
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.create') }}">Room Booking</a></button>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.index') }}">Show All Transactions</a></button>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Administrator Settings
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.admin_create') }}">Register New Admin</a></button>
            </div>
        </div>
    </div>
    {{----}}
    {{--<ul class="nav nav-tabs nav-justified">--}}
        {{--<li class="active"><a data-toggle="tab" href="#menu1">User</a></li>--}}
        {{--<li><a data-toggle="tab" href="#menu2">Room</a></li>--}}
        {{--<li><a data-toggle="tab" href="#menu3">Booking & Transaction</a></li>--}}
    {{--</ul>--}}
    {{--<div class="tab-content">--}}

        {{--<div id="menu1" class="tab-pane fade in active">--}}
            {{--<div class="padding"></div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.create') }}">Renter Registration</a></button>--}}
                {{--<br><br>--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.allUser') }}">View All Registered Renter</a></button>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}

            {{--</div>--}}
            {{--<div class="col-lg-4">--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div id="menu2" class="tab-pane fade">--}}
            {{--<div class="padding"></div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.create') }}">Register New Room</a></button>--}}
                {{--<br>--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.check_availability') }}">Check Room Availability</a></button>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}

            {{--</div>--}}
        {{--</div>--}}

        {{--<div id="menu3" class="tab-pane fade">--}}
            {{--<div class="padding"></div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.index') }}">Show All Transactions</a></button>--}}
                {{--<br>--}}
                {{--<button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.create') }}">Room Booking</a></button>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    @endsection