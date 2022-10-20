<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\WorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorders= WorkOrder::all();
        return view('authenticated.maintenance.workorders.index')->with(compact('workorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token','subject']);

        WorkOrder::create([
            'products_worked_on'=>json_encode($data),
            'parts_used'=>json_encode($data),
            'description'=>$request->description,
            'user_id'=>$request->user_id,
            'company_id'=>$request->company_id,
            'note'=>$request->note,
            'when'=>$request->when,
            'location'=>$request->location,
        ]);
        return redirect()->route('workorder');
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
        $workorder = WorkOrder::findOrFail($id);
        return view('authenticated.maintenance.workorders.edit')->with(compact('workorder'));
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
        $workorder = WorkOrder::findOrFail($id);
        $workorder->update($request->except('_token','_method'));
        return redirect()->route('workorders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkOrder::destroy($id);
        return redirect()->route('workorders.index')->with('message', "Werk bon is succesvol verwijderd");
    }
}