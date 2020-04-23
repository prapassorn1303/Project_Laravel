<?php

namespace App\Http\Controllers;

use App\ProductBeer;
use Illuminate\Http\Request;

class ProductBeerController extends Controller
{
    public function index()
    {
        $products =ProductBeer::all();
        return view('products.index',compact('products',$products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'description'=> 'required',
            'price'=> 'required',
            'img'=> 'required'
        ]);
        $product = ProductBeer::create([
            'name'=>$request->name,
            'description'=> $request->description,
            'price'=>$request->price
            
        ]);
        $path = $request->img->store('public/imageproduct');
        
        return redirect('/products/'.$product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductBeer  $task
     * @return \Illuminate\Http\Response
     */
    public function show(ProductBeer  $product)
    {
        return view('products.show',compact('product',$product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductBeer  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBeer $product)
    {
        return view('products.edit',compact('product',$product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductBeer  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBeer $product)
    {
        $request->validate([
            'name'=>'required|min:3',
            'description'=> 'required',
            'price'=> 'required',
            'img'=> 'required'
        ]);
        $product->name =$request->name;
        $product->description = $request->description;
        $product->price =$request->price;
       // $product->img = $request->img;

       $path = $request->img->store('public/imageproduct');
        
       
        $product->save();
        $request->session()->flash('message','Successfully save !!!!');
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductBeer  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,ProductBeer $product)
    {
        $product->delete();
        $request->session()->flash('message','Successfully delete !!!!');
        return redirect('products');
    }
}
