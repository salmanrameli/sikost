@extends('layouts.admin')

@section('title')
    All Booking History
    @endsection

@section('content')
    <div class="page-header">
        <h2>All Booking History</h2>
    </div>
    <table class="table">
        <tr>
            <th>Booking ID</th>
            <th>Renter Name</th>
            <th>Room Number</th>
            <th>Rent Started</th>
            <th>Rent Ended</th>
            <th>Details</th>
        </tr>
        @foreach($transactions as $transaction)
        <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user_id }}</td>
                <td>{{ $transaction->room_number }}</td>
                <td>{{ $transaction->rent_started }}</td>
                <td>{{ $transaction->rent_ended }}</td>
                <td>
                    <button type="button" class="btn btn-info"><a href="{{ route('transaction.show', ['id' => $transaction->id]) }}">Show Details</a></button>
                </td>
        </tr>
        @endforeach
    </table>
    @endsection