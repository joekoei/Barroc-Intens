<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Maintenance;
use App\Models\User;
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
        return view('authenticated.maintenance.meetings.index')->with(compact('meetings'));
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
        $users = User::all()->where('role_id','=',2);
        return view('authenticated.maintenance.meetings.create')->with(compact('meetings' , 'companies','users'));
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
            "remark"=>$request->remark,
            "company_id"=>$request->comp,
            "date_added"=>$request->date,
            'user_id'=>$request->user_id,
        ]);

        // do your shizzle
        $isAnual = false;
        if(isset($request->isAnual)){
            $isAnual = true;
        }

        if($isAnual) {
            for ($x = 0; $x <= 4; $x++) {
                $date = $request->date;
                $months = $x*6;
                $calculatedDate = date('Y-m-d h:m:s', strtotime("+ " . $months . " months", strtotime($date)));
                Maintenance::create([
                    "remark"=>$request->remark,
                    "company_id"=>$request->comp,
                    "date_added"=>$calculatedDate,
                    "user_id"=>$request->user_id
                ]);
            }
        }

        return redirect()->route('meetings.index');
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
        return view('authenticated.maintenance.meetings.show')->with(compact('meeting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meeting = Maintenance::findOrFail($id);
        return view('authenticated.meetings.edit')->with(compact('meeting'));
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
        $meeting = Maintenance::findOrFail($id);
        $meeting->remark = $request->remark;
        $meeting->company_id = $request->comp;
        $meeting->date_added= $request->date;
        $meeting->save();
        return redirect()->route('meetings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Maintenance::destroy($id);
        return back();
    }
}
