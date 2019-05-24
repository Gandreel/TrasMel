<?php

namespace App\Http\Controllers;

use App\Modelo\Usuario;


use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TrasMel/autentificacion/registro1');
    }

    public function login()
    {
        return view('TrasMel/autentificacion/login1');
    }

    public function registro()
    {
        return view('TrasMel/autentificacion/registro1');
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
        $usu = new Usuario();
        $usu->nick = $request['nick'];
        $usu->pass = $request['pass'];
        $usu->correo = $request['correo'];
        $usu->idPersona = $request['idPersona'];
        $usu->categoria = $request['categoria'];
        $usu->save();

        $mensaje = "Usuario creado exitosamente";
        return view('TrasMel/autentificacion/login', compact("mensaje"));



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
