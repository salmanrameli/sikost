@extends('layouts.admin')

@section('title')
    Add Payment
    @endsection

@section('content')
    <div class="page-header">
        <h2>Add Payment</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::open(['route' => 'payment.store']) }}

        <label for="renter_id" class="control-label">Renter Name</label>
        <select class="form-control" name="renter_id" id="renter_id" data-parsley-required="true">
            @foreach ($bookeds as $booked) {
                <option value="{{ $booked->user_id }}">{{ $booked->user->name }}</option>
                }
            @endforeach
        </select>
        <br>

        <div class="form-group">
            {{ Form::label('room_number', 'Room Number', ['class' => 'control-label']) }}
            {{ Form::text('room_number', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('date', 'Payment Date', ['class' => 'control-label']) }}
            {{ Form::date('date', $now, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('amount', 'Payment Amount in Rp', ['class' => 'control-label']) }}
            {{ Form::text('amount', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Add Payment', ['class' => 'btn btn-lg btn-success']) }}
        {{ Form::close() }}

    </div>
    <div class="col-lg-2"></div>
    @endsection