@extends('layouts.admin')

@section('title')
    Payment Details
    @endsection

@section('content')
    <div class="page-header">
        <h2>Payment History for {{ $renter->name }}</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>Payment ID</th>
                <th>Room Number</th>
                <th>Payment Date</th>
                <th>Amount</th>
            </tr>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->room_number }}</td>
                <td>{{ $payment->date }}</td>
                <td>{{ $payment->amount }}</td>
            </tr>
                @endforeach
        </table>
    </div>
    @endsection