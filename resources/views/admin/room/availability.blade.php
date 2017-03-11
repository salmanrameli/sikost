@extends('layouts.admin')

@section('title')
    Check Room Availability
    @endsection

@section('content')

    <div class="col-lg-8">
        <div class="page-header">
            <h2>Rented Room</h2>
        </div>
        <table class="table">
            <tr>
                <th>Room Number</th>
                <th>Renter Name</th>
                <th>Rent Started</th>
                <th>Rent Ended</th>
            </tr>
            @foreach($booked as $room)
                <tr>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->user->name }}</td>
                    <td>{{ $room->rent_started }}</td>
                    <td>{{ $room->rent_ended }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="col-lg-4">
        <div class="page-header">
            <h2>Room Available for Rent</h2>
        </div>
        <table class="table">
            <tr>
                <th>Room Number</th>
            </tr>
            @foreach($empty as $null)
                <tr>
                    <td>{{ $null->room_number }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection