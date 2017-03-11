@extends('layouts.admin')

@section('title')
    Admin Home
    @endsection

@section('content')
    <h2>Greetings, {{ $user->name }}</h2>
    <br>
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#menu1">User</a></li>
        <li><a data-toggle="tab" href="#menu2">Room</a></li>
        <li><a data-toggle="tab" href="#menu3">Booking & Transaction</a></li>
    </ul>
    <div class="tab-content">

        <div id="menu1" class="tab-pane fade in active">
            <div class="padding"></div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.create') }}">User Registration</a></button>
                <br><br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('admin.allUser') }}">View All User</a></button>
            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
        </div>

        <div id="menu2" class="tab-pane fade">
            <div class="padding"></div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.create') }}">Register New Room</a></button>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('room.check_availability') }}">Check Room Availability</a></button>
            </div>
            <div class="col-lg-4">

            </div>
        </div>

        <div id="menu3" class="tab-pane fade">
            <div class="padding"></div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.index') }}">Show all transactions</a></button>
                <br>
                <button type="button" class="btn btn-default btn-lg btn-block"><a href="{{ route('transaction.create') }}">Room Booking</a></button>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    @endsection