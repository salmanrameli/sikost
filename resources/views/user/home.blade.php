@extends('layouts.user')

@section('title')
    {{ $user }} Dashboard
    @endsection

@section('content')
    hello {{ $user }}
    @endsection