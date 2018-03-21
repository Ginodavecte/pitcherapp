<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maincategory extends Model
{
  protected $fillable = ['name'];

  public function products(){
    return $this->belongsToMany('App\Product');
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
