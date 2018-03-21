<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_img extends Model
{
  public function products(){
    return $this->belongsToMany('App\Product');
  }
}
