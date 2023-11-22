<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class controllerClientes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();

        return View('contacto.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Esto es opcional, depende de si lomanejan en una vista aprte, si es un modal esta linea se borra
        
        return view('VistaDeRegistroDeCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->fecha_evento = $request->fecha_evento;
        $cliente->tipo_plan = $request->tipoPlan;

        if ($request->recibir_publicidad=='on') {
            $cliente->recibir_publicidad = 1;

        } else {
            $cliente->recibir_publicidad = 0;
        }
        
        $cliente->save();
        return redirect()->back();
    }

    public function showPlan(Request $request)
    {
        
        $tipoPlan = $request->plan;
        $precio = $request->precio;
        
        return view('tienda.checkout', compact('tipoPlan','precio'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return View('VistaDeVerDatos', compact('cliente'));
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
        $cliente = Cliente::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->direccion = $request->direccion;
        
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->fecha_evento = $request->fecha_evento;
        $cliente->tipo_plan = $request->tipo_plan;
        if ($request->recibir_publicidad=='on') {
            $cliente->recibir_publicidad = 1;

        } else {
            $cliente->recibir_publicidad = 0;
        }
        $cliente->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->back();
    }
}
