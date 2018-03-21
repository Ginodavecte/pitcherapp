<?php

use Illuminate\Database\Seeder;

use App\Brand;
class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
          'name' => 'Nike'
        ]);
        Brand::create([
          'name' => 'Adidas'
        ]);
        Brand::create([
          'name' => 'Puna'
        ]);
    }
}
