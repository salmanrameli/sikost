<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpensesCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();

        return view('admin.expenses.all')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ExpensesCategories::all();

        return view('admin.expenses.create')->with('categories', $categories);
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
            'name' => 'required',
            'date' => 'required',
            'amount' => 'required',
        ]);

        $input = $request->all();

        Expense::create($input);

        Session::flash('status', 'Expense Payment Successfully Added');

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
        $expenses = Expense::findorFail($id);

        $name = ExpensesCategories::all();

        return view('admin.expenses.edit')->with('expenses', $expenses)->with('categories', $name);
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
        $expenses = Expense::findorFail($id);

        $this->validate($request, [
            'date' => 'required',
            'name' => 'required',
            'amount' => 'required'
        ]);

        $input = $request->all();

        $expenses->fill($input)->save();

        Session::flash('status', 'Expenses Payment Successfully Changed');

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
}
