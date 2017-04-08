@extends('layouts.admin')

@section('title')
    Edit Expenses Category Name
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Expenses Category Name</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        {{ Form::model($expenses, ['method' => 'PATCH', 'route' => ['expenses_categories.update', $expenses->id]]) }}

        <div class="form-group">
            {{ Form::label('name', 'Name', ['class' => 'control-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Edit Expenses Category Name', ['class' => 'btn btn-warning btn-lg']) }}

        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection