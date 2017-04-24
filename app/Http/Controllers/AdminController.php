<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Transaction;
use App\User;
use App\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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
        $userInfo = Auth::user();

        $booked = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->count();

        $rooms = Transaction::where([['rent_started', '<=', Carbon::today()->toDateString()], ['rent_ended', '>', Carbon::today()->toDateString()]])->get()->pluck('room_number');

        $empty = DB::table('rooms')->whereNotIn('room_number', $rooms)->count();

        $income = Payment::whereMonth('date', '=', date('m'))->sum('amount');

        $expenses = Expense::whereMonth('date', '=', date('m'))->sum('amount');

        $profit = $income - $expenses;

        return view('admin.home')->with('user', $userInfo)->with('booked', $booked)->with('empty', $empty)->with('income', $income)->with('expenses', $expenses)->with('profit', $profit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
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
            'id' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'birth' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        $admin = new User();

        $admin->id = $request->id;
        $admin->name = $request->name;
        $admin->sex = $request->sex;
        $admin->birth = $request->birth;
        $admin->address = $request->address;
        $admin->phone = $request->phone;
        $admin->password = bcrypt($request->password);
        $admin->isAdmin = true;

        $admin->save();

        Session::flash('status', 'Administrator successfully added');

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
        $admin = User::findorFail($id);

        return view('admin.admin.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findorFail($id);

        return view('admin.admin.edit')->with('admin', $admin);
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
        $admin = User::findorFail($id);

        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'birth' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $input = $request->all();

        $admin->fill($input)->save();

        Session::flash('status', 'Administrator details successfully updated');

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
        $admin = User::findorFail($id);

        $admin->delete();

        Session::flash('status', 'Administrator successfully removed');

        return redirect()->route('admin.index');
    }

    public function showAll()
    {
        $admin = DB::table('users')->where('isAdmin', '=', true)->get();

        return view('admin.admin.list')->with('admins', $admin);
    }
}
