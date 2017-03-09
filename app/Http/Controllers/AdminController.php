<?php

namespace App\Http\Controllers;

use App\User;
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

        return view('admin.home')->with('user', $userInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.register');
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
            'isAdmin' => 'required'
        ]);

        $admin = new User();

        $admin->id = $request->id;
        $admin->name = $request->name;
        $admin->sex = $request->sex;
        $admin->birth = $request->birth;
        $admin->address = $request->address;
        $admin->phone = $request->phone;
        $admin->password = bcrypt($request->password);
        $admin->isAdmin = $request->isAdmin;

        $admin->save();

        Session::flash('status', 'User successfully added');

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

    public function showAll()
    {
        $users = DB::table('users')->where('isAdmin', '=', false)->get();

        return view('admin.all')->with('users', $users);
    }
}
