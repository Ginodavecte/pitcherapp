<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

      	$this->call(MainCategoriesTableSeeder::class);
      	$this->call(ColorTableSeeder::class);
      	$this->call(BrandTableSeeder::class);
      	$this->call(SizeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
      	//$this->call(RelationsTableSeeder::class);
    }
}
