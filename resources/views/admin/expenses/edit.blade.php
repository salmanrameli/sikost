@extends('layouts.admin')

@section('title')
    Edit Expenses Payment Details
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Expenses Payment Details</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($expenses, ['method' => 'PATCH', 'route' => ['expenses.update', $expenses->id]]) }}

        <div class="form-group">
            {{ Form::label('date', 'Payment Date', ['class' => 'control-label']) }}
            {{ Form::date('date', null, ['class' => 'form-control']) }}
        </div>

        <label for="name">Expense Name</label>
        <select class="form-control" name="name" id="name" data-parsley-required="true">
            @foreach ($categories as $name)
                {
                <option value="{{ $name->name }}">{{ $name->name }}</option>
                }
            @endforeach
        </select>

        <br>

        <div class="form-group">
            {{ Form::label('amount', 'Payment Amount', ['class' => 'control-label']) }}
            {{ Form::text('amount', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Save Changes', ['class' => 'btn btn-warning']) }}
        {{ Form::close() }}

    </div>
    <div class="col-lg-2"></div>
    @endsection