<?php

namespace App\Http\Controllers;

use App\Room;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();

        return view('admin.transaction.index')->with('transactions', $transaction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empty = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get()->pluck('room_number');

        $rooms = DB::table('rooms')->whereNotIn('room_number', $empty)->pluck('room_number');

        return view('admin.room.booking')->with('rooms', $rooms);
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
            'user_id' => 'required',
            'room_number' => 'required',
            'rent_started' => 'required',
            'rent_ended' => 'required'
        ]);

        $transaction = new Transaction();

        $transaction->user_id = $request->user_id;
        $transaction->room_number = $request->room_number;
        $transaction->rent_started = $request->rent_started;
        $transaction->rent_ended = Carbon::createFromFormat('Y-m-d', $request->rent_started)->addMonth($request->rent_ended);

        $transaction->save();

        Session::flash('status', 'Booking created successfully');

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Transaction::findorFail($id);

        return view('admin.transaction.show')->with('details', $details);
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
}
