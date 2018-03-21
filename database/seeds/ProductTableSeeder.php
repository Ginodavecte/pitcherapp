<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Product::create([
      'title' => 'Nike air one',
      'slug' => 'nike-air-one',
      'price' => '150,00',
      'suggested_retail_price' => '80,00',
      'vat' => '21%',
      'size' => '45',
      'weight' => '150g',
      'status' => 'Sold out',
      'description' => 'Awesome nikes',
      'short_description' => 'Nike Air One',
      'barcode' => '123456'
    ]);

    Product::create([
      'title' => 'Nike air max one',
      'slug' => 'nike-air-max-one',
      'price' => '150,00',
      'suggested_retail_price' => '80,00',
      'vat' => '21%',
      'size' => '39',
      'weight' => '150g',
      'status' => 'Sold out',
      'description' => 'Awesome Nike air max one',
      'short_description' => 'Nike air max one',
      'barcode' => '123456'
    ]);

    Product::create([
      'title' => 'Adidas',
      'slug' => 'adidas',
      'price' => '150,00',
      'suggested_retail_price' => '80,00',
      'vat' => '21%',
      'size' => '39',
      'weight' => '150g',
      'status' => 'Sold out',
      'description' => 'Awesome Adidas',
      'short_description' => 'Adidas',
      'barcode' => '123456'
    ]);
    Product::create([
      'title' => 'Puma',
      'slug' => 'puma',
      'price' => '150,00',
      'suggested_retail_price' => '80,00',
      'vat' => '21%',
      'size' => '39',
      'weight' => '150g',
      'status' => 'Sold out',
      'description' => 'Awesome pumas',
      'short_description' => 'pumas',
      'barcode' => '123456'
    ]);






  }
}
