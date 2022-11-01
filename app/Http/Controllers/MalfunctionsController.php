<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malfunction;

class MalfunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malfunctions = Malfunction::all();
        return view("authenticated.customer.malfunctions.index")->with(compact('malfunctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $malfunctions = Malfunction::all();
        return view("authenticated.customer.malfunctions.create")->with(compact('malfunctions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Malfunction::create([

        ]);

        return redirect()->route('malfuctions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $malfuntions = Malfunction::findOrFail($id);
        return view('authenticated.customer.malfunctions.see')->with(compact('malfuntions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $malfuntions = Malfunction::findOrFail($id);
        return view('authenticated.customer.malfunctions.edit')->with(compact('malfuntions'));
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
        $malfunctions = Malfunction::findOrFail($id);
        $malfunctions->update($request->except('_token','_method'));
        return redirect()->route('malfunctions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Malfunction::destroy($id);
        return redirect()->route('malfunctions.index')->with('message', "Storing is succesvol verwijderd");
    }
}
