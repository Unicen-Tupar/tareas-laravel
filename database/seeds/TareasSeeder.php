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
        factory(\App\Tarea::class)->create(['user_id' => 1, 'category_id' => 1]);
      }
    }
}
