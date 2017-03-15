@extends('layouts.admin')

@section('title')
    Administrators List
    @endsection

@section('content')
    <div class="page-header">
        <h2>Administrators List</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Show Details</th>
                <th>Edit Details</th>
            </tr>
            @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->phone }}</td>
                <td><a href="{{ route('admin.show', ['id' => $admin->id]) }}" class="btn btn-info">Show Details</a></td>
                <td><a href="{{ route('admin.edit', ['id' => $admin->id]) }}" class="btn btn-warning">Edit Details</a></td>
            </tr>
                @endforeach
        </table>
    </div>
    @endsection