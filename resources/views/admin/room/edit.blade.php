@extends('layouts.admin')

@section('title')
    Change Room Number
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Room</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($room, ['method' => 'PATCH', 'route' => ['room.update', $room->room_number]]) }}

        <div class="form-group">
            {{ Form::label('room_number', 'Room Number', ['class' => 'control-label']) }}
            {{ Form::text('room_number', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Change Room Number', ['class' => 'btn btn-warning btn-lg']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection