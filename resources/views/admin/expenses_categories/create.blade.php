@extends('layouts.admin')

@section('title')
    Create New Expenses Category
    @endsection

@section('content')
    <div class="page-header">
        <h2>Create New Expenses Category</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::open(['route' => 'expenses_categories.store']) }}

        <div class="form-group">
            {{ Form::label('name', 'Expenses Name', ['class' => 'control-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Register New Expenses', ['class' => 'btn btn-success btn-lg']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection