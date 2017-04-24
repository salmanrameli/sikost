<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = DB::table('users')->where('isAdmin', '=', false)->get();

        return view('admin.user.all')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.register');
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

        $user = new User();

        $user->id = $request->id;
        $user->name = $request->name;
        $user->sex = $request->sex;
        $user->birth = $request->birth;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = bcrypt('password');
        $user->isAdmin = false;

        $user->save();

        Session::flash('status', 'User successfully registered');

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
        $user = User::findorFail($id);

        return view('admin.user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('admin.user.edit')->with('user', $user);
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
        $user = User::findorFail($id);

        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'birth' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();

        $user->fill($input)->save();

        Session::flash('status', 'User details successfully changed');

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
        $user = User::findorFail($id);

        $user->delete();

        Session::flash('status', 'Renter details successfully deleted');

        return redirect()->route('admin.index');
    }

    public function allRenter()
    {
        $users = DB::table('users')->where('isAdmin', '=', false)->get();

        return view('admin.user.list')->with('users', $users);
    }
}
