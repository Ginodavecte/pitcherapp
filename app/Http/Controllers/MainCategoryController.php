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
    // categories
    $category = Maincategory::find($id);

    foreach($category->products as $product){
      //dd($product)
      $data = [];
      $color = $product->colors;
      $size = $product->sizes;
      $brand = $product->brands;
      $details = array_merge($data, ['color' => $color, 'size' => $size, 'brand' => $brand]);

      //dd($details);
    };
    //dd($details);


    return view('categories.index', compact('category','categories', 'brands', 'colors', 'sizes'));
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
