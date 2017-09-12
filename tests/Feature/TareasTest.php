<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    public function testAccedeListaTareasConUnUsuarioRegistrado()
    {
        $user = factory(\App\User::class)->create();
        $response =  $this->actingAs($user)->get('/');
        $response->assertStatus(200);
    }

    public function testRedireccionaALoginSiNoHayUnUsuarioLogueado()
    {
        $response =  $this->get('/');
        $response->assertRedirect('/login');
    }
}
