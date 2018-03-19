<?php

use Illuminate\Database\Seeder;
use App\Product;
class TableProductSeeder extends Seeder
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
        'subcatid' => '',
        'subcategory' => 'Team clothing',
        'vat' => '21%',
        'size' => '45',
        'weight' => '150g',
        'description' => 'Awesome nikes',
        'barcode' => '123456'
      ]);

      Product::create([
        'title' => 'Nike air max',
        'slug' => 'nike-air-max',
        'price' => '150,00',
        'suggested_retail_price' => '80,00',
        'subcatid' => '',
        'subcategory' => 'Team clothing',
        'vat' => '21%',
        'size' => '39',
        'weight' => '150g',
        'description' => 'Awesome Nike Air One',
        'barcode' => '123456'
      ]);
    }
}
