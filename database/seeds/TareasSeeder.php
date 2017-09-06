<?php

use Illuminate\Database\Seeder;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 1000 ; $i++) {
         App\Tarea::create([ 'nombre' => str_random(10),'descripcion' => str_random(100),'category_id' => rand(1,6)]);
      }
    }
}
