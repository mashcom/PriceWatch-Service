<?php

namespace App\Http\Controllers;

use App\ProductHistory;
use Illuminate\Http\Request;

class ProductHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_history = new ProductHistory();
        $product_history->product_id = $request->product_id;
        $product_history->price = $request->price;
        $product_history->user_id = auth('api')->user()->id;
        $product_history->organisation_id =$request->organisation_id;

        return response()->json(["status"=>$product_history->save()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductHistory  $productHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductHistory $productHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductHistory  $productHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductHistory $productHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductHistory  $productHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductHistory $productHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductHistory  $productHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductHistory $productHistory)
    {
        //
    }
}
