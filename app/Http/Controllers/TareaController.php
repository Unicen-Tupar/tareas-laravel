<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tareas = Tarea::paginate(10);

      foreach ($tareas as $tarea) {
          $tarea->nombre_categoria = $tarea->category->name;
      }

      $categories = Category::withCount('tasks')->get();

      return view('tareas.index',['tareas' => $tareas, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('tareas.create',['categorias'=> $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tarea::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return view('tareas.show',['tarea' => $tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $categories = Category::all();
        return view('tareas.edit',['tarea' => $tarea,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->nombre = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        if ($request->hecho==''){
          $tarea->hecho = 0;
        }
        else{
          $tarea->hecho = $request->hecho;
        }
        $tarea->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //$t = Tarea::find($tarea->id);
      $tarea->delete();
      return redirect('/');
    }
}
