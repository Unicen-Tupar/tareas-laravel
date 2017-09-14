<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class)->create(['email' => 'test@mail.com', 'password' => bcrypt('123456')]);
    }
}
