<?php

use Illuminate\Database\Seeder;

use App\Color;
class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Color::create([
        'name' => 'Red'
      ]);
      Color::create([
        'name' => 'Blue'
      ]);
      Color::create([
        'name' => 'Black'
      ]);
      Color::create([
        'name' => 'Gray'
      ]);
    }
}
