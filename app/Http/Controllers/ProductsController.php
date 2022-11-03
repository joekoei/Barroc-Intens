<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCatogory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = Product::all();
        return view('authenticated.products.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $product_cats = ProductCatogory::all();
        return view('authenticated.products.create')->with(compact('product_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $request->image_paths = "empty for now";

        Product::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "image_paths"=>$request->image_paths,
            "price"=>$request->price,
            "product_catogory_id"=>$request->cat,
            "stock"=>$request->stock
        ]);

        return redirect()->route('products.index');
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
        $product_cats = ProductCatogory::all();
        return view('authenticated.products.edit')->with(compact('product','product_cats'));
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
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->product_catogory_id = $request->cat;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }


    public function order(Order $order){
        $order->agree = true;
        $order->status = "Completed";
        $order->save();

        $product = $order->product();
        $product->stock = $product->stock + $order->pieces;
        $product->save();

        $orders = Order::all()->where('agree','=',0);
        return view('authenticated.products.order.index')->with(compact('orders'));
    }

    public function seeOrders(){
        $orders = Order::all()->where('agree','=',0);
        return view('authenticated.products.order.index')->with(compact('orders'));
    }

    public function orderProduct(Product $product){
        return view('authenticated.products.order.create')->with(compact('product'));
    }

    public function storeOrder(Request $request){
        $status = "Complete";
        $agree = true;
        if($request->stock > 5000){
           $status = "Waiting on Head";
           $agree = false;
        }

        if($agree){
            $product = Product::findOrFail($request->product_id);
            $product->stock = $product->stock + $request->stock;
            $product->save();
        }

        Order::create([
            "product_id"=>$request->product_id,
            "pieces"=>$request->stock,
            "status"=>$status,
            "agree"=>$agree
        ]);

        return redirect()->route('products.index');
    }
}
