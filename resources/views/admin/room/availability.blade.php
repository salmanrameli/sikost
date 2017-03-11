@extends('layouts.admin')

@section('title')
    Check Room Availability
    @endsection

@section('content')
    @foreach($rooms as $room)
        <div class="col-lg-4">
            {{ $room->room_number }}
        </div>
        <div class="col-lg-4">
            {{ $room->rent_started }}
        </div>
        <div class="col-lg-4">
            {{ $room->rent_ended }}
        </div>
        @endforeach
    @endsection