<?php

namespace App;

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
}
