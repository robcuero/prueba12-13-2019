<?php

namespace App\Http\Controllers;

use App\estudiante;
use App\semestre;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos=estudiante::all();
        $datos2=semestre::all();
        return view('adminlte::estudiante',compact('datos','datos2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
    $est=new estudiante;
        $est->nombre=$request->nombre;
        $est->apellido=$request->apellido;
        $est->cedula=$request->cedula;
        $est->sexo=$request->sexo;
        $est->idSemestre=$request->idSemestre;
        $est->save();
        return redirect()->action('EstudianteController@index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(estudiante $estudiante)
    {
        //
    }
      public function eliminar($id)
    {
       
        $tipo=estudiante::find($id);
         $tipo->delete();
         return  redirect()->action('EstudianteController@index');

    }
     public function editar($id)
    {
       
        $tipo=estudiante::find($id);
        $datos=semestre::all();
        return view('adminlte::editarestudiante',compact('tipo','datos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(estudiante $estudiante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function updat(Request $request,$id)
    {
      
            $est=estudiante::find($id);
            $est->nombre=$request->nombre;
            $est->apellido=$request->apellido;
            $est->cedula=$request->cedula;
            $est->sexo=$request->sexo;
            $est->idSemestre=$request->idSemestre;

          $est->save();
   return  redirect()->action('EstudianteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(estudiante $estudiante)
    {
        //
    }
}
