@extends('layouts.admin')

@section('title')
    Renters List
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Renter Details</h2>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <table class="table">
            <tr>
                <th>Renter Name</th>
                <th>Edit Information</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit Details</a></td>
            </tr>
                @endforeach
        </table>
    </div>
    <div class="col-lg-2"></div>
    @endsection