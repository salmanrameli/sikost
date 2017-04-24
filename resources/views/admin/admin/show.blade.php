@extends('layouts.admin')

@section('title')
    {{ $admin->name }} Details
    @endsection

@section('content')
    <div class="page-header">
        <h2>Details for Administrator: {{ $admin->name }}</h2>
    </div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $admin->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $admin->name }}</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>{{ $admin->sex }}</td>
            </tr>
            <tr>
                <th>Birth Date</th>
                <td>{{ $admin->birth }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $admin->address }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $admin->phone }}</td>
            </tr>
        </table>
        {{ Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $admin->id]]) }}
        {{ Form::submit('Delete This Administrator', ['class' => 'btn btn-lg btn-danger']) }}
        {{ Form::close() }}
    </div>
    @endsection