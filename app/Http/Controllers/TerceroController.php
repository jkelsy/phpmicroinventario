<?php

namespace App\Http\Controllers;

use App\Tercero;
use App\Venta;
use Illuminate\Http\Request;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $clientes = Tercero::get();
        return $clientes;

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
        $tercero = Tercero::create($request->all());
        /*$rercero->ter_nombre    = $request->input("ter_nombre");
        $rercero->ter_direccion = $request->input("ter_direccion");
        $rercero->ter_telefono  = $request->input("ter_telefono");
        $rercero->ter_saldo     = $request->input("ter_saldo");
        $tercero->save();*/
        return response()->json($tercero, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function show(Tercero $tercero)
    {
        //
        return $tercero;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function edit(Tercero $tercero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tercero $tercero)
    {
        $tercero->update($request->all());

        return response()->json($tercero, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tercero $tercero)
    {
        $tercero->delete();

        return response()->json(null, 204);
    }

    public function deuda($id){

        $ventas = Venta::where('vnt_cliente_id', '=', $id)
                        ->where('vnt_saldo', '>', 0)
                        ->get();

        return $ventas;
    }
}