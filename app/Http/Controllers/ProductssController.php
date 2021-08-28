<?php

namespace App\Http\Controllers;

use App\Models\productss;
use Illuminate\Http\Request;

class ProductssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = productss::paginate(8);
        // select * from products
        return view('products.index', compact('products'));
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
        $products = products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'precio' => $request->input('precio'),
            'image' => $request->input('image'),
            'companies_id' => $request->input('companies_id')
        ]);
        return redirect('users')->with('status','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productss  $productss
     * @return \Illuminate\Http\Response
     */
    public function show(productss $productss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productss  $productss
     * @return \Illuminate\Http\Response
     */
    public function edit(productss $productss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productss  $productss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productss $productss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productss  $productss
     * @return \Illuminate\Http\Response
     */
    public function destroy(productss $productss)
    {
        //
    }
}
