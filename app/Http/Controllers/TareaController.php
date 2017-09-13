<?php

namespace App\Http\Controllers;

use Auth;
use App\Tarea;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TareaController extends Controller
{

      public function __construct()
      {
        $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tareas = Tarea::where('user_id','=',Auth::id())->paginate(10);

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
        $usuarios = User::all();
        return view('tareas.create',['categorias'=> $categorias, 'usuarios'=> $usuarios]);
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
        #TODO Mejorar esto
        $tarea->update($request->all());
        if($request->hecho == ''){
          $tarea->hecho = 0;
          $tarea->save();
        }
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
