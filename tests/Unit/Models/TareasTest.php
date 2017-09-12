<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TareasTest extends TestCase
{
    public function testCategoryRetornaLaCategoriaDeLaTarea()
    {
      $categoria = factory(\App\Category::class)->create();
      $tarea = factory(\App\Tarea::class)->create(['category_id' => $categoria->id]);
      $this->assertEquals($tarea->category->name, $categoria->name);
    }

    public function testUserRetornaElUsuarioDeLaTarea()
    {
      $usuario = factory(\App\User::class)->create();
      $tarea = factory(\App\Tarea::class)->create(['user_id' => $usuario->id]);
      $this->assertEquals($tarea->user->name, $usuario->name);
    }

    public function testTituloCompletoRetornaElTituloDeLaTareaConSuUsuario()
    {
      $usuario = factory(\App\User::class)->create();
      $tarea = factory(\App\Tarea::class)->create(['user_id' => $usuario->id]);

      $this->assertEquals($tarea->tituloCompleto(), $tarea->nombre.' - by '.$usuario->name);
    }
}
