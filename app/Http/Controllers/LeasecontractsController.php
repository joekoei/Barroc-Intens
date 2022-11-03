<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\Leasecontract;
use Illuminate\Http\Request;

class LeasecontractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        $lease = leasecontract::all();
        return view('authenticated.finance.lease.index')->with(compact('invoices', 'lease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $lease = leasecontract::all();
        return view('authenticated.finance.lease.create')->with(compact('companies','lease'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        leasecontract::create([
            "company_id"=>$request->comp,
            "agreed_rules"=>$request->agreed_rules,
            "date"=>$request->date,
            "pay_method"=>$request->pay_method
        ]);

        return redirect()->route('leasecontracts.index');
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
        $companies = Company::all();
        $lease = leasecontract::findOrFail($id);
        return view('authenticated.finance.lease.edit')->with(compact('lease', 'companies'));

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
        $lease = Leasecontract::findOrFail($id);
        $lease->update($request->except('_token','_method'));
        return redirect()->route('leasecontracts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Leasecontract::destroy($id);
        return redirect()->route('leasecontracts.index')->with('message', "Leasecontract is succesvol verwijderd");

    }
}
