@extends('layouts.admin')

@section('title')
    Renters List
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Renter Details</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>Renter ID</th>
                <th>Renter Name</th>
                <th>Edit Information</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit Details</a></td>
            </tr>
                @endforeach
        </table>
    </div>
    @endsection