<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Context;
class TenantCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('show-products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('create-porduct');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$name)
    {
        $request->validate([
            'name'=> 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('tenant.product.index',app('currentTenant')->name);

    }

    /**
     * Display the specified resource.
     */
    public function show($name , $id)
    {
        $product = Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($name,String $id)
    {
        $product = Product::find($id);
        return view('product',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$name,$id)
    {
        $validator = $request->validate([
            'name' => 'required',
        ]);
        $product = Product::find($id);
      $product->update($request->all());
        return redirect()->route('tenant.product.index',app('currentTenant')->name);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($name, Request $request)
    {
        Product::destroy($request->ids);
        return redirect()->route('tenant.product.index',app('currentTenant')->name);

    }
}
