<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Pioneta;
use Illuminate\Support\Facades\View;

class pionetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pio = new Pioneta();
        $pio->rut = $request['rutPioneta'];
        $pio->nombre = $request['nombrePioneta'];
        $pio->apellidoP = $request['apPioneta'];
        $pio->apellidoM = $request['amPioneta'];
        $pio->telefono = $request['fonoPioneta'];
        $pio->activo = $request['activoPioneta'];
        $pio->save();

        $mensaje = "Registro de Pioneta exitoso";

        return view("TrasMel\Home\home", compact("mensaje"));
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
