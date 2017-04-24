@extends('layouts.admin')

@section('title')
    Renter Details
    @endsection

@section('content')
    <div class="page-header">
        <h2>Details for: {{ $user->name }}</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>{{ $user->sex }}</td>
            </tr>
            <tr>
                <th>Birth Date</th>
                <td>{{ $user->birth }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $user->address }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $user->phone }}</td>
            </tr>
        </table>
        {{ Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) }}
        {{ Form::submit('Delete This Renter Details', ['class' => 'btn btn-lg btn-danger']) }}
        {{ Form::close() }}
    </div>
    <div class="col-lg-2"></div>
    @endsection