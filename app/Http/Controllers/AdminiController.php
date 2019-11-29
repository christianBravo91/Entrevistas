<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Usuario;

class AdminiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {

         $this->middleware('auth:admin');
     }


    public function index()
    {
        $posts= Usuario::all();
        return view('administrador.inicioAdministrador',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post= Usuario::findOrFail($id);
        return view('administrador.calificar',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
           'examenTeorico' => 'required',
          'entrevistaGrupal' => 'required',
          'entrevistaIndividual' => 'required',
         ],

        [
          'examenTeorico.required' => 'Debe seleccionar un numero',
          'entrevistaGrupal.required' => 'Debe seleccionar un numero',
          'entrevistaIndividual.required' => 'Debe Seleccionar un numero',

        ]);

        $usuario= Usuario::findOrFail($id);
        $usuario->CondicionAplicante='Calificado';
        $usuario->save();
        $usuario->update($request->all());

        return back()->with('status','La evaluacion fue exitosa!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        Usuario::findOrFail($id)->delete();

        return back()->with('status','La Eliminacion fue exitosa!');
    }
}
