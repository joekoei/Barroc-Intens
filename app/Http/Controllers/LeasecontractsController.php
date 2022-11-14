<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Invoice;
use App\Models\Leasecontract;
use App\Models\Product;
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
        $products = Product::all();
        return view('authenticated.finance.lease.create')->with(compact('companies','lease','products'));;
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
            "pay_method"=>$request->pay_method,
            "prijs"=>$request->prijs,
            "product"=>$request->product,
            "status"=>$request->status,
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname
        ]);

        Invoice::create([
            "company_id"=>$request->comp,
            "paid_at"=>$request->date,
            "date"=>$request->date,
            "naam_klant"=>$request->firstname,
            "achternaam_klant"=>$request->lastname,
            "gemaakte_afspraken"=>$request->agreed_rules,
            "prijs"=>$request->prijs
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
        $companies = Company::all();
        $lease = leasecontract::all();
        $invoice = Invoice::all();
        return view('authenticated.finance.lease.show')->with(compact('lease', 'companies','invoice'));
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
        $products = Product::all();
        return view('authenticated.finance.lease.edit')->with(compact('lease', 'companies','products'));

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
