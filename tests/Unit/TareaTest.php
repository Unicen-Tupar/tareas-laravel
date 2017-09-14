<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TareaTest extends TestCase
{
    public function testRetornaCategoriaCuandoLlamoCategoryEnTarea()
    {
        //Setup
        $categoria = factory(\App\Category::class)->create();
        $tarea = factory(\App\Tarea::class)->create(['category_id' => $categoria->id]);

        //Llamar
        $category_id = $tarea->category->id;

        //Asset
        $this->assertEquals($category_id, $categoria->id);
    }

    public function testRetornaNombreDeTareaCompleto()
    {
        //Setup
        $usuario = factory(\App\User::class)->create();
        $tarea = factory(\App\Tarea::class)->create(['user_id' => $usuario->id]);

        //Llamar
        $nombre = $tarea->nombreCompleto();

        //Asset
        $this->assertEquals($nombre, "$tarea->nombre - Asignada a: $usuario->name" );
    }

    public function testRetornaUserCuandoLlamoUserEnTarea()
    {
        //Setup
        $usuario = factory(\App\User::class)->create();
        $tarea = factory(\App\Tarea::class)->create(['user_id' => $usuario->id]);

        //Llamar
        $user_id = $tarea->user->id;

        //Asset
        $this->assertEquals($user_id, $usuario->id);
    }
}
