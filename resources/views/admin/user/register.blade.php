@extends('layouts.admin')

@section('title')
    Renter Registration
    @endsection

@section('content')
    <div class="page-header">
        <h2>Renter Registration</h2>
    </div>
    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.store') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
            <label for="id" class="col-md-4 control-label">ID</label>

            <div class="col-md-6">
                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" required>

                @if ($errors->has('id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
            <label for="sex" class="col-md-4 control-label">Sex</label>

            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::radio('sex', 'male', true) }}
                    {{ Form::label('sex', 'Male', ['class' => 'control-label']) }}<br>
                    {{ Form::radio('sex', 'female') }}
                    {{ Form::label('sex', 'Female', ['class' => 'control-label']) }}
                </div>

                @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
            <label for="birth" class="col-md-4 control-label">Birthdate</label>

            <div class="col-md-6">
                <input id="birth" type="date" class="form-control" name="birth" required>

                @if ($errors->has('birth'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birth') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="address" class="col-md-4 control-label">Address</label>

            <div class="col-md-6">
                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="col-md-4 control-label">Phone</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group hidden {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" value="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group hidden">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="password" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success btn-lg">
                    Register Renter
                </button>
            </div>
        </div>
    </form>
    @endsection