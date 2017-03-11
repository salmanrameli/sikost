@extends('layouts.admin')

@section('title')
    All Transactions History
    @endsection

@section('content')
    <div class="page-header">
        <h2>All Transactions History</h2>
    </div>
    <table class="table">
        <tr>
            <th>Transaction ID</th>
            <th>Renter Name</th>
            <th>Room Number</th>
            <th>Rent Started</th>
            <th>Rent Ended</th>
            <th>Details</th>
        </tr>
        @foreach($transactions as $transaction)
        <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->name }}</td>
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