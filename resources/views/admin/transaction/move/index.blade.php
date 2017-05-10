@extends('layouts.admin')

@section('title')
    Move Room
@endsection

@section('content')
    <div class="page-header">
        <h2>Move to Other Room</h2>
    </div>
    <table class="table">
        <tr>
            <th>Booking ID</th>
            <th>Renter Name</th>
            <th>Room Number</th>
            <th>Rent Started</th>
            <th>Rent Ended</th>
            <th>Change Room</th>
        </tr>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->room_number }}</td>
                <td>{{ $transaction->rent_started }}</td>
                <td>{{ $transaction->rent_ended }}</td>
                <td>
                    <a href="{{ route('transaction.edit', ['id' => $transaction->id]) }}"><button type="button" class="btn btn-warning">Change Details</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection