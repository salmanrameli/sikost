<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $user = DB::table('users')->where('isAdmin', '=', false)->get();

        $empty = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get()->pluck('room_number');

        $rooms = DB::table('rooms')->whereNotIn('room_number', $empty)->pluck('room_number');

        return view('admin.room.booking')->with('rooms', $rooms)->with('users', $user);
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
            'renter_id' => 'required',
            'room_number' => 'required',
            'rent_started' => 'required',
            'rent_ended' => 'required'
        ]);

        $transaction = new Transaction();

        $transaction->user_id = $request->renter_id;
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

        $id = DB::table('transactions')->where('id', '=', $id)->pluck('user_id');

        $payments = DB::table('payments')->where('renter_id', '=', $id)->get();

        return view('admin.transaction.show')->with('details', $details)->with('payments', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaction = Transaction::findorFail($id);

        $empty = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get()->pluck('room_number');

        $rooms = DB::table('rooms')->whereNotIn('room_number', $empty)->pluck('room_number');

        return view('admin.transaction.move.edit')->with('transaction', $transaction)->with('rooms', $rooms);
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
        $transaction = Transaction::findorFail($id);

        $this->validate($request, [
            'room_number' => 'required',
        ]);

        $input = $request->all();

        $transaction->fill($input)->save();

        Session::flash('status', 'Successfully move to other room');

        return redirect()->route('admin.index');
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

    public function move()
    {
        $booked = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get();

        return view('admin.transaction.move.index')->with('transactions', $booked);
    }
}
