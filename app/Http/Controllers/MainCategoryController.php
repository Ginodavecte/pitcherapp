<?php

namespace App\Http\Controllers;

use App\Maincategory;
use App\Product;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$categories = Maincategory::with('products', 'colors')->get();
      $products = Product::with('maincategories', 'colors', 'sizes')->get();

      return view('categories.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function edit(main_category $main_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, main_category $main_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\main_category  $main_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(main_category $main_category)
    {
        //
    }
}
