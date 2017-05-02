@extends('layouts.admin')

@section('title')
    Edit Expenses Name
    @endsection

@section('content')
    <div class="page-header">
        <h2>Edit Expenses Categories Name</h2>
    </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Edit</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td><a href="{{ route('expenses_categories.edit', $category->name) }}" class="btn btn-warning">Edit Details</a></td>
        </tr>
            @endforeach
    </table>
    @endsection