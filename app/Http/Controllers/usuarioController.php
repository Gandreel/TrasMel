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

    public function ingreso(){
        $mensaje = null;
        return view('TrasMel/autentificacion/login1',compact("mensaje"));
    }

    public function login(Request $request)
    {
        $nombre = $request['nick'];
        $valida = Usuario::all();
        foreach($valida as $val){
           if($val->nick == $nombre){
               $categoria = Usuario::$categoria;
               return view('TrasMel/autentificacion/registro1', compact("mensaje"));
           }
        }

        $datos = Usuario::where('nick',$request->input('nick'))
                ->orWhere('pass',$request->input('pass'))->first();
        $mensaje = null;
        return view('TrasMel/Home/Inicio', compact('mensaje'));
    }

    public function registro()
    {
        $mensaje = null;
        return view('TrasMel/autentificacion/registro1', compact('mensaje'));
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
        try {

        $usu = new Usuario();
        $usu->nick = $request['nick'];
        $usu->pass = $request['pass'];
        $usu->correo = $request['correo'];
        $usu->idPersona = $request['idPersona'];
        $usu->categoria = $request['categoria'];
        $nombre =$request['nick'];

        //validar que nombre de usuario sea unico
        $valida = Usuario::all();
             foreach($valida as $val){
                if($val->nick == $nombre){
                    $mensaje = 'Usuario ya existente';
                    return view('TrasMel/autentificacion/registro1', compact("mensaje"));
                }
             }

        $usu->save();

        $mensaje = "Usuario creado exitosamente";
        return view('TrasMel/autentificacion/login1', compact("mensaje"));
        } catch (Exception $e){
            $mensaje = "error al Registrar";
            return view('TrasMel/autentificacion/login1', compact("mensaje"));
        }



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
