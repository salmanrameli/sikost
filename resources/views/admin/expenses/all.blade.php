@extends('layouts.admin')

@section('title')
    Expenses Payment Histories
    @endsection

@section('content')
    <div class="page-header">
        <h2>Expenses Payment Histories</h2>
    </div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>Date</th>
                <th>Expense Name</th>
                <th>Amount</th>
                <th>Edit</th>
            </tr>
            @foreach($expenses as $expense)
            <tr>
                <td>{{ $expense->date }}</td>
                <td>{{ $expense->name }}</td>
                <td>{{ $expense->amount }}</td>
                <td><a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning">Edit Details</a></td>
            </tr>
                @endforeach
        </table>
    </div>
    @endsection