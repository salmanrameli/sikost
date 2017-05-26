@extends('layouts.admin')

@section('title')
    All Payments History
    @endsection

@section('content')
    <div class="page-header">
        <h2>All Payments History</h2>
    </div>
    <div class="padding"></div>
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>Renter ID</th>
                <th>Renter Name</th>
                <th>Room Number</th>
                <th>Amount</th>
            </tr>
            @foreach($renters as $renter)
            <tr>
                <td>{{ $renter->renter_id }}</td>
                <td>{{ $renter->ruser->name }}</td>
                <td>{{ $renter->room_number }}</td>
                <td>{{ $renter->amount }}</td>
                {{--<td><a href="{{ route('payment.show', $renter->id) }}" class="btn btn-info">View Payment History</a></td>--}}
            </tr>
                @endforeach
        </table>
    </div>
    @endsection