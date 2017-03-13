@extends('layouts.admin')

@section('title')
    Remove Room
    @endsection

@section('content')
    <div class="page-header">
        <h2>Remove Room</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <h4>Rooms listed below are rooms that currently empty or not rented.</h4>
        <br>
        <table class='table'>
            <tr>
                <th>Room Number</th>
                <th>Remove Room</th>
            </tr>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>
                    {{ Form::open(['method' => 'DELETE', 'route' => ['room.destroy', $room->room_number]]) }}
                    {{ Form::submit('Remove Room', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
                @endforeach
            </tr>
        </table>
    </div>
    <div class="col-lg-2"></div>
    @endsection