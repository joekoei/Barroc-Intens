<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('authenticated.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('authenticated.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creates products object with the fillable options in the model class
        Product::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "image_paths"=>$request->image_paths,
            "price"=>$request->price,
            "product_catogory_id"=>$request->product_cat
        ]);

        return redirect()->route('auth.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('authenticated.products.see')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('authenticated.products.edit')->with(compact('product'));
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
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return view('authenticated.products.index');
    }
}
