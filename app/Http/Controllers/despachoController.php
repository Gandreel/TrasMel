<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Despacho;

class despachoController extends Controller
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
        $des = new Despacho();
        $des->fechaSalida = $request['salidaDespacho'];
        $des->fechaEntrega = $request['entregaDespacho'];
        $des->camion_id = $request['camionDespacho'];
        $des->cliente_id = $request['clienteDespacho'];
        $des->direccion_id = $request['direccionDespacho'];
        $des->chofer_id = $request['choferDespacho'];
        $des->save();

        $mensaje = "Despacho Ingresado correctamente";
        return view('TrasMel\Home\home', compact('mensaje'));

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
