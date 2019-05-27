<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TrasMel/Home/index');
    }

    public function seguimiento(){
        return view('TrasMel/Home/Seguimiento');
    }

    public function noticias(){
        return view('TrasMel/Home/Noticias');
    }

    public function servicios(){
        return view('TrasMel/Home/Servicios');
    }

    public function contacto(){
        return view('TrasMel/Home/Contacto');
    }

    public function noticia1(){
        return view('TrasMel/Noticias/AppMovil');
    }

    public function noticia2(){
        return view('TrasMel/Noticias/Seguimiento');
    }

    public function noticia3(){
        return view('TrasMel/Noticias/Noticias/TrasMel');
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
        //
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
