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
         App\User::create(['name'=> 'Test User', 'email' => 'test@mail.com', 'password' => bcrypt('123456'), 'isManager' => 1]);
    }
}
