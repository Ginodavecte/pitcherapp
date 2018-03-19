<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function maincategories(){
    return $this->belongsToMany('App\MainCategory');
  }
}
