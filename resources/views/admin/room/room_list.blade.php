@extends('layouts.admin')

@section('title')
    Rooms List
    @endsection

@section('content')
    <div class="page-header">
        <h2>Change Room Number</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <table class="table">
            <tr>
                <th>Room Number</th>
                <th>Edit</th>
            </tr>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td><a href="{{ route('room.edit', $room->room_number) }}" class="btn btn-warning">Change Room Number</a></td>
            </tr>
                @endforeach
        </table>
    </div>
    <div class="col-lg-2"></div>
    @endsection