@extends('layouts.admin')

@section('title')
    Rent Details
    @endsection

@section('content')
    <div class="col-lg-8">
        <h2>Rent details for: {{ $details->user->name }}</h2>
        <hr>
        <div class="col-lg-12">
            <h5>Booking ID</h5>
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
    <div class="col-lg-4">
        <h3>Payment History</h3>
        <br>
        <table class="table">
            <tr>
                <th>Payment Date</th>
                <th>Payment Amount</th>
            </tr>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->date }}</td>
                    <td>Rp {{ $payment->amount }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection