<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function maincategories(){
    return $this->belongsToMany('App\Maincategory');
  }

  public function colors(){
    return $this->belongsToMany('App\Color');
  }

  public function sizes(){
    return $this->belongsToMany('App\Size');
  }

  public function images(){
    return $this->belongsToMany('App\Product_img');
  }

  public function brands(){
    return $this->belongsToMany('App\Brand');
  }
}
