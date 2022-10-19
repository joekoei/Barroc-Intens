<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Maintenance;
use Illuminate\Http\Request;

class ErrorMaintenanceControllor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Maintenance::all();
        return view('authenticated.maintenance.errors.index')->with(compact('meetings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meetings = Maintenance::all();
        $companies = Company::all();
        return view('authenticated.maintenance.errors.create')->with(compact('meetings' , 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Maintenance::create([
            "name"=>$request->name,
            "remark"=>$request->remark,
            "company_id"=>$request->comp,
            "date_added"=>$request->date,
            "product_catogory_id"=>$request->cat
        ]);

        return redirect()->route('errors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meeting = Maintenance::findOrFail($id);
        return view('authenticated.errors.show')->with(compact('meeting'));
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
