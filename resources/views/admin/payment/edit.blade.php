@extends('layouts.admin')

@section('title')
    Edit Payment Details
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Payment History of: {{ $renter->name }} on {{ $payment->date }}</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($payment, ['method' => 'PATCH', 'route' => ['payment.update', $payment->id]]) }}

        <div class="form-group">
            {{ Form::label('renter_id', 'Renter ID', ['class' => 'control-label']) }}
            {{ Form::text('renter_id', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('room_number', 'Room Number', ['class' => 'control-label']) }}
            {{ Form::text('room_number', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('date', 'Payment Date', ['class' => 'control-label']) }}
            {{ Form::date('date', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('amount', 'Payment Amount in Rp', ['class' => 'control-label']) }}
            {{ Form::text('amount', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Edit Payment Details', ['class' => 'btn btn-warning btn-lg']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection