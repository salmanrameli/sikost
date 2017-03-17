<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Payment::all();

        if($test->count())
        {
            $id = DB::table('payments')->pluck('renter_id');

            $renters = DB::table('users')->where('id', '=', $id)->get();

            return view('admin.payment.all')->with('renters', $renters);
        }
        else
        {
            return view('admin.payment.no-result');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booked = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get();

        $now = Carbon::now()->toDateString();

        return view('admin.payment.create')->with('bookeds', $booked)->with('now', $now);
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
            'date' => 'required',
            'amount' => 'required',
        ]);

        $input = $request->all();

        Payment::create($input);

        Session::flash('status', 'Payment successfully added');

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
        $payments = DB::table('payments')->where('renter_id', '=', $id)->get();

        $renter = User::findorFail($id);

        return view('admin.payment.show')->with('payments', $payments)->with('renter', $renter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findorFail($id);

        $transaction = DB::table('transactions')->where('user_id', '=', $payment->renter_id)->get();

        $renter = DB::table('users')->where('id', '=', $payment->renter_id)->first();

        return view('admin.payment.edit')->with('payment', $payment)->with('transaction', $transaction)->with('renter', $renter);
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
        $payment = Payment::findorFail($id);

        $this->validate($request, [
            'renter_id' => 'required',
            'room_number' => 'required',
            'date' => 'required',
            'amount' => 'required'
        ]);

        $input = $request->all();

        $payment->fill($input)->save();

        Session::flash('status', 'Payment details successfully updated');

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
        $payment = Payment::findorFail($id);

        $payment->delete();

        Session::flash('status', 'Payment details successfully deleted');

        return redirect()->route('admin.index');
    }

    public function showAll()
    {

    }
}
