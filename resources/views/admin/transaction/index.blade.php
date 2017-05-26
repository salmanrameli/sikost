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
            <th>Edit</th>
        </tr>
        @foreach($transactions as $transaction)
        <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->room_number }}</td>
                <td>{{ $transaction->rent_started }}</td>
                <td>{{ $transaction->rent_ended }}</td>
                <td>
                    <a href="{{ route('transaction.show', ['id' => $transaction->id]) }}"><button type="button" class="btn btn-info">Show Details</button></a>
                </td>
                <td>
                    <a href="{{ route('transaction.edit', ['id' => $transaction->id]) }}"><button type="button" class="btn btn-warning">Edit Rent Duration</button></a>
                </td>
        </tr>
        @endforeach
    </table>
    @endsection