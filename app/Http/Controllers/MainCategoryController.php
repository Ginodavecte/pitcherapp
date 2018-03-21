<?php

namespace App\Http\Controllers;

use App\Maincategory;
use App\Product;
use App\Color;
use App\Brand;
use App\Size;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      // colors
      $colors = Color::all();
      // brands
      $brands = Brand::all();
      // maincategories
      $categories = Maincategory::all();
      // size
      $sizes = Size::all();

      $products = Product::find($id)->with('maincategories', 'colors', 'sizes', 'images', 'brands')->paginate(10);
      return $products;
      //return $products[1];
      //dd($products[0]->brands->brand_name);
      return view('categories.index', compact('products'));
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
      // colors
      $colors = Color::all();
      // brands
      $brands = Brand::all();
      // maincategories
      $categories = Maincategory::all();
      // size
      $sizes = Size::all();



      $categories = Maincategory::find($id);
      //$products = $categories->products;



      //return $categories;
      //dd($products[0]->brands->brand_name);
      return view('categories.index', compact('categories','colors','brands','sizes'));
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
