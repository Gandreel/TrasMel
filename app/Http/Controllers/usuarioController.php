<?php

namespace App\Http\Controllers;

use App\Modelo\Persona;


use Illuminate\Http\Request;
use App\Modelo\Usuario;

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
        return view('TrasMel/autentificacion/login',compact("mensaje"));
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
        return view('TrasMel/autentificacion/registro', compact('mensaje'));
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

    public function registrarse(Request $request)
    {

    try {
         $us = new Usuario();
         $us->correo = $request['correo'];
         $us->pass = $request['pass'];
         $us->save();

         $mensaje = "Usuario creado exitosamente";
         return view('TrasMel/autentificacion/login', compact("mensaje"));
    } catch (Exception $e){
        $mensaje = "error al Registrar";
        return view('TrasMel/autentificacion/registro', compact("mensaje"));
    }
}

    public function store(Request $request)
    {
        try {

            if($request->hasFile('avatar')){
                $file = $request['avatar'];
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/avatars/', $name);
            }


        $usu = new Persona();
        $usu->nombre = $request['nombre'];
        $usu->apellidos = $request['apellidos'];
        $usu->rut = $request['rut'];
        $usu->pass = $request['pass'];
        $usu->email = $request['correo'];
        $usu->fono = $request['fono'];
        $usu->direccion = $request['direccion'];
        $usu->categoria = $request['categoria'];
        $usu->avatar = $name;
        $correo = $request['correo'];

        //validar que nombre de usuario sea unico
        $valida = Persona::all();
             foreach($valida as $val){
                if($val->email == $correo){
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
