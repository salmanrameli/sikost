@extends('layouts.admin')

@section('title')
    Room Booking
    @endsection

@section('content')
    <div class="page-header">
        <h2>Room Booking</h2>
    </div>
    <div class="padding"></div>
    {{ Form::open(['route' => 'user.store']) }}

    <div class="form-group">
        {{ Form::label('id', 'ID', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('started', 'Room Rent Started', ['class' => 'control-label']) }}
        {{ Form::selectMonth('month') }}
    </div>
    @endsection