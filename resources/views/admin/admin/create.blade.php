@extends('layouts.admin')

@section('title')
    Register New Administrator
    @endsection

@section('content')
    <div class="page-header">
        <h2>Administrator Registration</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::open(['route' => 'admin.store']) }}

        <div class="form-group">
            {{ Form::label('id', 'Administrator ID', ['class' => 'control-label']) }}
            {{ Form::text('id' , null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('name', 'Administrator Name', ['class' => 'control-label']) }}
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

        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="control-label">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <div class="form-group hidden">
            {{ Form::radio('isAdmin', 1, true) }}
            {{ Form::label('isAdmin', 'Admin', ['class' => 'control-label']) }}<br>
            {{ Form::radio('isAdmin', 0) }}
            {{ Form::label('isAdmin', 'User', ['class' => 'control-label']) }}
        </div>

        {{ Form::submit('Register Administrator', ['class' => 'btn btn-lg btn-success']) }}

    </div>
    <div class="col-lg-2"></div>
    @endsection