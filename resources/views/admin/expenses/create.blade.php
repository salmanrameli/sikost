@extends('layouts.admin')

@section('title')
    Add Expenses Payment
    @endsection

@section('content')
    <div class="page-header">
        <h2>Add Expenses Payment</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::open(['route' => 'expenses.store']) }}

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
            {{ Form::label('amount', 'Expense Payment Amount (Rp)', ['class' => 'control-label']) }}
            {{ Form::text('amount', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Add Expense Payment', ['class' => 'btn btn-lg btn-success']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection