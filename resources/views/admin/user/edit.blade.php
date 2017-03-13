@extends('layouts.admin')

@section('title')
    Edit Renter Details
@endsection

@section('content')
    <div class="page-header">
        <h2>Edit Renter Details for: {{ $user->name }}</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($user, ['method' => 'PATCH', 'route' => ['user.update', $user->id]]) }}

        <div class="form-group">
            {{ Form::label('id', 'Renter ID', ['class' => 'control-label']) }}
            {{ Form::text('id', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('name', 'Renter Name', ['class' => 'control-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('sex', 'Sex', ['class' => 'control-label']) }}<br>
            {{ Form::radio('sex', 'male', true) }}
            {{ Form::label('sex', 'Male', ['class' => 'control-label']) }}<br>
            {{ Form::radio('sex', 'female') }}
            {{ Form::label('sex', 'Female', ['class' => 'control-label']) }}
        </div>

        <div class="form-group">
            {{ Form::label('birth', 'Birth Date', ['class' => 'control-label']) }}
            {{ Form::date('birth', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Address', ['class' => 'control-label']) }}
            {{ Form::text('address', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('phone', 'Phone Number', ['class' => 'control-label']) }}
            {{ Form::text('phone', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Edit Renter Details', ['class' => 'btn btn-warning btn-lg']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
@endsection