<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tenant;
use Context;
use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller 
{
   

    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        // $tenant = $tenant->execute(fn()=>$tenant->products()->get());
        // dd($tenant);
      $tenant = app('currentTenant');


      $products = Product::all()->pluck('name');

      dd($products);
    //   dd(Context::get('current_tenant'));
    }

    public function infos(){
        $tenant = Auth::user()->tenants()->first();
        return view('infos',compact('tenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
