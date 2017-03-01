@extends('layouts.admin')

@section('title')
    Admin Home
    @endsection

@section('content')
    <h3>Selamat datang, {{ $user->name }}</h3>
    <br>
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>

    <div class="col-lg-12">
        <div class="tab-content">

            <div id="menu1" class="tab-pane fade in active">
                <h3>Menu 1</h3>
                <p>Some content in menu 1.</p>
            </div>

            <div id="menu2" class="tab-pane fade">
                <h3>Menu 2</h3>
                <p>Some content in menu 2.</p>
            </div>

            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Some content in menu 3.</p>
            </div>

        </div>
    </div>
    @endsection