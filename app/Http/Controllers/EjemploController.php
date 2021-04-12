<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//se hace referencia en cada elemento donde se use la db
use Illuminate\Support\Facades\DB;


class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cadena de conexion insert

        //DB::insert('insert into ejemplo (titulo,prueba) values (?, ?)', ['ejemplo1','prueba1']);
        //cadena para actualizar 
       // $actualizar = DB::update('update ejemplo set titulo = "nuevo titulo" where id = ?', [1]);
        //return $actualizar;

        //cadena para eliminar 
        //$eliminar = DB::delete('delete from ejemplo where id = ?', [1]);
        //return $eliminar;
        //cade de conexion leer

        $leer = DB::select('select * from ejemplo');
        return $leer;

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "estoy aprendiendo laravel";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$titulo,$categoria)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
