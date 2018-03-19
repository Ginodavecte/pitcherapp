<?php

use Illuminate\Database\Seeder;
use App\MainCategory;
class MainCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainCategory::create([
          'name' => 'Shoes',
          'slug' => 'shoes',
        ]);

        MainCategory::create([
          'name' => 'Clothing',
          'slug' => 'clothing',
        ]);

        MainCategory::create([
          'name' => 'Accessories',
          'slug' => 'accessories',
        ]);
    }
}
