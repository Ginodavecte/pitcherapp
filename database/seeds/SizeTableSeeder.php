<?php

use Illuminate\Database\Seeder;

use App\Size;
class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
          'name' => '39'
        ]);
        Size::create([
          'name' => '40'
        ]);
        Size::create([
          'name' => '41'
        ]);
        Size::create([
          'name' => '42'
        ]);
        Size::create([
          'name' => '43'
        ]);
        Size::create([
          'name' => '44'
        ]);
        Size::create([
          'name' => '45'
        ]);
        Size::create([
          'name' => '46'
        ]);
    }
}
