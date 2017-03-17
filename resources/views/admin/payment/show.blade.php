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
                <th>Edit Payment</th>
                <th>Delete Payment</th>
            </tr>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->room_number }}</td>
                <td>{{ $payment->date }}</td>
                <td>{{ $payment->amount }}</td>
                <td><a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-warning">Edit Payment Details</a></td>
                <td>
                    {{ Form::open(['method' => 'DELETE', 'route' => ['payment.destroy', $payment->id]]) }}
                    {{ Form::submit('Delete Payment', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
                @endforeach
        </table>
    </div>
    @endsection