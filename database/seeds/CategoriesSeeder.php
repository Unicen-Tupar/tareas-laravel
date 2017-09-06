<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Category::create(['name'=> 'Trabajo']);
         App\Category::create(['name'=> 'Casa']);
         App\Category::create(['name'=> 'Facultad']);
         App\Category::create(['name'=> 'Otras']);
    }
}
