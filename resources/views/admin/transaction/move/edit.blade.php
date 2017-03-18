@extends('layouts.admin')

@section('title')
    Move Room
    @endsection

@section('content')
    <div class="page-header">
        <h2>Move Room for: {{ $transaction->user->name }}</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($transaction, ['method' => 'PATCH', 'route' => ['transaction.update', $transaction->id]]) }}

        <div class="form-group hidden">
            {{ Form::label('id', 'Transaction ID', ['class' => 'control-label']) }}
            {{ Form::text('id', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group hidden">
            {{ Form::label('user_id', 'Renter ID', ['class' => 'control-label']) }}
            {{ Form::text('user_id', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            <label for="room_number">Move to Room Number</label>
            <select class="form-control" name="room_number" id="room_number" data-parsley-required="true">
                @foreach ($rooms as $room){
                    <option value="{{ $room }}">{{ $room }}</option>
                    }
                @endforeach
            </select>
        </div>

        <div class="form-group hidden">
            {{ Form::label('rent_started', 'Rent Started On', ['class' => 'control-label']) }}
            {{ Form::date('rent_started', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group hidden">
            {{ Form::label('rent_ended', 'Rent Ended On', ['class' => 'control-label']) }}
            {{ Form::date('rent_ended', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Move to this room', ['class' => 'btn btn-warning']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection