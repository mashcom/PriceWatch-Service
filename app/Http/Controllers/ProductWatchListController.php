<?php

namespace App\Http\Controllers;

use App\ProductWatchList;
use Illuminate\Http\Request;

class ProductWatchListController extends Controller
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
        $product_watch_list = new ProductWatchList();
        $product_watch_list->product_id= $request->product_id;
        $product_watch_list->user_id = auth('api')->user()->id;
        return response()->json(["status"=>$product_watch_list->save()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductWatchList  $productWatchList
     * @return \Illuminate\Http\Response
     */
    public function show(ProductWatchList $productWatchList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductWatchList  $productWatchList
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductWatchList $productWatchList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductWatchList  $productWatchList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductWatchList $productWatchList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductWatchList  $productWatchList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductWatchList $productWatchList)
    {
        //
    }
}
