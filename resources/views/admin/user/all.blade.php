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
                <th>Sex</th>
                <th>Birth date</th>
                <th>Address</th>
                <th>Phone Number</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->sex }}</td>
                <td>{{ $user->birth }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
            @endforeach
        </table>

    @endsection