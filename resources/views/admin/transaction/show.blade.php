@extends('layouts.admin')

@section('title')
    Transaction Details
    @endsection

@section('content')
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <h2>Transaction details for: {{ $details->user->name }}</h2>
        <hr>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="col-lg-12">
            <h5>Transaction ID</h5>
            <h3>{{ $details->id }}</h3>
            <hr>
        </div>
        <div class="col-lg-6">
            <h5>Renter ID</h5>
            <h3>{{ $details->user_id }}</h3>
        </div>
        <div class="col-lg-6">
            <h5>Renter Name</h5>
            <h3>{{ $details->user->name }}</h3>
        </div>
        <div class="col-lg-12">
            <br>
        </div>
        <div class="col-lg-6 green">
            <h5>Rent Started on</h5>
            <h3>{{ $details->rent_started }}</h3>
        </div>
        <div class="col-lg-6 red">
            <h5>Rent Ended on</h5>
            <h3>{{ $details->rent_ended }}</h3>
        </div>
    </div>
    <div class="col-lg-2"></div>
    {{--<table class="table">--}}
        {{--<tr>--}}
            {{--<th>Transaction ID</th>--}}
            {{--<td>{{ $details->id }}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th>Renter ID</th>--}}
            {{--<td>{{ $details->user_id }}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th>Renter Name</th>--}}
            {{--<td>{{ $details->user->name }}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th>Rent Started</th>--}}
            {{--<td>{{ $details->rent_started }}</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th>Rent Ended</th>--}}
            {{--<td>{{ $details->rent_ended }}</td>--}}
        {{--</tr>--}}
    {{--</table>--}}
    @endsection