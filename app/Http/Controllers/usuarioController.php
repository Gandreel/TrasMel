<?php

namespace App\Http\Controllers;

use App\Modelo\Persona;

use Illuminate\Http\Request;
use App\Modelo\Usuario;
use Illuminate\Http\UploadedFile;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    public function indexPerfil()
    {
        $mensaje = null;
        return view('TrasMel/Clientes/EditarPerfil', compact('mensaje'));
    }

    public function perfil(Request $request)
    {
        $validaCorreo = Usuario::where('correo', '=', $request['correo'])->first();
        $validaPass = Usuario::where('pass', '=', $request['pass'])->first();
        if ($validaCorreo != null && $validaPass != null) {
            $dato = Persona::where('email', '=', $request['correo'])->first();
            if ($dato === null) {
                $correo = $request['correo'];
                $pass = $request['pass'];
                $id = Usuario::where('correo', '=', $request['correo'])->value('idUsuario');

                $mensaje = "Debe Rellenar Sus Datos";
                return view('TrasMel/Clientes/EditarPerfil', compact('correo', 'pass', 'mensaje', 'id'));
            } else {
                $usuario = "";
                return view('TrasMel/Home/index', compact('usuario'));
            }
        } else {
            $mensaje = 'Usuario o Contraseña Invalido';
            return view('TrasMel/Autentificacion/login', compact('mensaje'));
        }
    }

    public function ingreso()
    {
        $mensaje = null;
        return view('TrasMel/Autentificacion/login', compact("mensaje"));
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

            $correo = $request['correo'];
            $validaCorreo = Usuario::where('correo', '=', $request['correo'])->first();
            if ($validaCorreo === $correo) {
                $mensaje = 'Correo ya existente';
                return view('TrasMel/autentificacion/Registro', compact("mensaje"));
            } else {
                if ($request['pass'] != $request['confirmar']) {

                    $mensaje = "Contraseñas no coinciden";
                    return view('TrasMel/Autentificacion/Registro', compact("mensaje"));
                } else {
                    $us = new Usuario();
                    $us->correo = $request['correo'];
                    $us->pass = $request['pass'];
                    $us->save();

                    $mensaje = "Usuario creado exitosamente";
                    return view('TrasMel/Autentificacion/login', compact("mensaje"));
                }
            }
        } catch (Exception $e) {
            $mensaje = "error al Registrar";
            return view('TrasMel/Autentificacion/registro', compact("mensaje"));
        }
    }

    public function crearActualizar(Request $request)
    {

        $mensaje = null;
        $validaCorreo = Persona::where('email', '=', $request['correo'])->first();
        if ($validaCorreo === null) {
            if ($request->hasFile('avatar')) {
                if ($request->file('avatar')->isValid()) {
                    $name = $request['id'] . '_avatar';
                    $path = $request->file('avatar')->storeAs('avatars', $name . '.' . $request->file('avatar')->getClientOriginalExtension());

                    $usu = new Persona();
                    $usu->nombre = $request['nombre'];
                    $usu->apellidos = $request['apellidos'];
                    $usu->rut = $request['rut'];
                    $usu->email = $request['correo'];
                    $usu->fono = $request['fono'];
                    $usu->direccion = $request['direccion'];
                    $usu->categoria = $request['categoria'];
                    $usu->avatar = $path;
                    $usu->usuario_id = $request['id'];
                    $usu->save();
                } else {
                    echo 'Archivo no Valido';
                }
            } else {
                echo 'Archivo no existe';
            }
            $correo = $request['correo'];
        $id = $request['id'];
        $mensaje = "Usuario creado exitosamente";
        return view('TrasMel/Clientes/EditarPerfil', compact("mensaje",'correo', 'id'));
        }

        return view('TrasMel/Home/index')->make('Inicio');;

        /*$mensaje= null;
    $validaCorreo = Persona::where('email', '=', $request['correo'])->first();
    if ($validaCorreo === null) {

        if ($request->hasFile('avatar')) {
            $file = $request['avatar'];
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/avatars/', $name);
            $usu = new Persona();
        $usu->nombre = $request['nombre'];
        $usu->apellidos = $request['apellidos'];
        $usu->rut = $request['rut'];
        $usu->email = $request['correo'];
        $usu->fono = $request['fono'];
        $usu->direccion = $request['direccion'];
        $usu->categoria = $request['categoria'];
        $usu->avatar = $name;
        $usu->usuario_id = $request['id'];
        $usu->save();
        }

        $correo = $request['correo'];
        $id = $request['id'];
        $mensaje = "Usuario creado exitosamente";
        return view('TrasMel/Clientes/EditarPerfil', compact("mensaje",'correo', 'id'));
    }

    return view('TrasMel/Home/index')->make('Inicio');;
*/
    }

    public function store(Request $request)
    {
        try {

            if ($request->hasFile('avatar')) {
                $file = $request['avatar'];
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path() . '/avatars/', $name);
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
            foreach ($valida as $val) {
                if ($val->email == $correo) {
                    $mensaje = 'Usuario ya existente';
                    return view('TrasMel/autentificacion/registro1', compact("mensaje"));
                }
            }

            $usu->save();

            $mensaje = "Usuario creado exitosamente";
            return view('TrasMel/autentificacion/login1', compact("mensaje"));
        } catch (Exception $e) {
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
