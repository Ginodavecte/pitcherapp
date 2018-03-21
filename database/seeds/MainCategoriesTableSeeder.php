<?php

use Illuminate\Database\Seeder;
use App\Maincategory;
class MainCategoriesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Maincategory::create([
      'name' => 'Shoes',
      'slug' => 'shoes',
    ]);

    Maincategory::create([
      'name' => 'Clothing',
      'slug' => 'clothing',
    ]);

    Maincategory::create([
      'name' => 'Accessories',
      'slug' => 'accessories',
    ]);
  }
}
