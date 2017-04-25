@extends('layouts.admin')

@section('title')
    Register New Room
    @endsection

@section('content')
    <div class="page-header">
        <h2>Register New Room</h2>
    </div>
    <div class="col-lg-3">
        <h4>Current Room</h4>
        <ul class="list-unstyled">
            @foreach($rooms as $room)
                <li>{{ $room->room_number }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-lg-6">

        {{ Form::open(['route' => 'room.store']) }}

        <div class="form-group">
            {{ Form::label('room_number', 'Room Number', ['class' => 'control-label']) }}
            {{ Form::text('room_number', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Register Room', ['class' => 'btn btn-success btn-lg']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-3"></div>
    @endsection