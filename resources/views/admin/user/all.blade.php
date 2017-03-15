@extends('layouts.admin')

@section('title')
    Renters List
    @endsection

@section('content')
    <h1>Renters List</h1>
    <div class="padding"></div>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Show Details</th>
                <th>Edit Details</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Show Details</a></td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit Details</a></td>
            </tr>
            @endforeach
        </table>

    @endsection