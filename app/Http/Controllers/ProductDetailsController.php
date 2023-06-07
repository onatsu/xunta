<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductDetailsRequest;
use App\Http\Requests\UpdateProductDetailsRequest;
use App\Models\ProductDetails;

class ProductDetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreProductDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function show(ProductDetails $productDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductDetails $productDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductDetailsRequest  $request
     * @param  \App\Models\ProductDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductDetailsRequest $request, ProductDetails $productDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDetails $productDetails)
    {
        //
    }
}
