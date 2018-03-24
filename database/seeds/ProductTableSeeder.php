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
      'weight' => '150g',
      'status' => 'Sold out',
      'description' => 'Awesome pumas',
      'short_description' => 'pumas',
      'barcode' => '123456'
    ]);

    // product - category
    $product_1 = Product::find(1);
    $product_1->maincategories()->attach(1);

    $product_2 = Product::find(2);
    $product_2->maincategories()->attach(1);

    $product_3 = Product::find(3);
    $product_3->maincategories()->attach(1);

    $product_4 = Product::find(4);
    $product_4->maincategories()->attach(1);

    // product - Color
    $product_1 = Product::find(1);
    $product_1->colors()->attach(1);

    $product_2 = Product::find(2);
    $product_2->colors()->attach(1);
    $product_2->colors()->attach(2);

    $product_3 = Product::find(3);
    $product_3->colors()->attach(2);
    $product_3->colors()->attach(4);

    $product_4 = Product::find(4);
    $product_4->colors()->attach(3);
    $product_4->colors()->attach(1);
    $product_4->colors()->attach(2);

    // product - size
    $product_1 = Product::find(1);
    $product_1->sizes()->attach(1);
    $product_1->sizes()->attach(2);
    $product_1->sizes()->attach(6);

    $product_2 = Product::find(2);
    $product_2->sizes()->attach(2);
    $product_2->sizes()->attach(5);
    $product_2->sizes()->attach(3);

    $product_3 = Product::find(3);
    $product_3->sizes()->attach(6);
    $product_3->sizes()->attach(4);
    $product_3->sizes()->attach(2);
    $product_3->sizes()->attach(5);

    $product_4 = Product::find(4);
    $product_4->sizes()->attach(3);
    $product_4->sizes()->attach(6);
    $product_4->sizes()->attach(1);
    $product_4->sizes()->attach(5);

    // product - brand
    $product_1 = Product::find(1);
    $product_1->brands()->attach(1);

    $product_2 = Product::find(2);
    $product_2->brands()->attach(1);

    $product_3 = Product::find(3);
    $product_3->brands()->attach(2);

    $product_4 = Product::find(4);
    $product_4->brands()->attach(3);




  }
}
