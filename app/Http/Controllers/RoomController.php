<?php

namespace App\Http\Controllers;

use App\Room;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::orderBy('room_number', 'asc')->get();

        return view('admin.room.create')->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'room_number' => 'required'
        ]);

        $input = $request->all();

        Room::create($input);

        Session::flash('status', 'Room registered successfully');

        return redirect()->route('room.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkAvailability()
    {
        $booked = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get();

        $rooms = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get()->pluck('room_number');

        $empty = DB::table('rooms')->whereNotIn('room_number', $rooms)->get();

        return view('admin.room.availability')->with('booked', $booked)->with('empty', $empty);
    }
}
