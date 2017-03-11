@extends('layouts.admin')

@section('title')
    Room Booking
    @endsection

@section('content')
    <div class="page-header">
        <h2>Room Booking</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        {{ Form::open(['route' => 'transaction.store']) }}

        <div class="form-group">
            {{ Form::label('user_id', 'Renter ID', ['class' => 'control-label']) }}
            {{ Form::text('user_id', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            <label for="room_number">Room Number</label>
            <select class="form-control" name="room_number" id="room_number" data-parsley-required="true">
                @foreach ($rooms as $room)
                    {
                    <option value="{{ $room }}">{{ $room }}</option>
                    }
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{ Form::label('rent_started', 'Room Rent Started', ['class' => 'control-label']) }}
            {{ Form::date('rent_started', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('rent_ended', 'Room Rent Duration', ['class' => 'control-label']) }}
            {{ Form::select('rent_ended', ['1' => '1 month', '2' => '2 months', '3' => '3 months', '4' => '4 months', '5' => '5 months', '6' => '6 months', '7' => '7 months', '8' => '8 months', '9' => '9 months', '10' => '10 months', '11' => '11 months', '12' => '12 months'], null, ['placeholder' => 'Choose duration', 'class' => 'form-control']) }}
        </div>

        {{ Form::submit('Book Now', ['class' => 'btn btn-lg btn-success']) }}
    </div>
    <div class="col-lg-3"></div>
    @endsection