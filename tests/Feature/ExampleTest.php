<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
     public function testAccederListaDeTareas()
     {
         $user = factory(\App\User::class)->create();
         $response = $this->actingAs($user)
                          ->get('/');
         $response->assertStatus(200);
     }

     public function testAccederListaDeTareasRedirigeALoginSinUsuario()
     {
        $response = $this->get('/');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
     }

     public function testAccederTareaDeUnUsuario()
     {
        $user = factory(\App\User::class)->create();
        $tarea = factory(\App\Tarea::class)->create(['user_id' => $user->id]);
        $response = $this->actingAs($user)->get("/tarea/$tarea->id");
        $response->assertStatus(200);
     }

     public function testAccederTareaQueNoEsDeElUsuarioLoguead()
     {
        $user = factory(\App\User::class)->create();
        $tarea = factory(\App\Tarea::class)->create();

        $response = $this->actingAs($user)->get("/tarea/$tarea->id");
        $response->assertStatus(403);
     }


}
