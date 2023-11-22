<?php

namespace App\Http\Controllers;

use App\Models\Ingredientes;
use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Ingredientes::all();
        return view('inventario.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vista');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $item = new Ingredientes();

        $item->nombre = $request->nombre;
        $item->cantidad = $request->cantidad;
        $item->fecha_vencimiento = $request->fecha_vencimiento;
        $item->nombre_proveedor = $request->proveedor;

        $item->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $item = Ingredientes::find($id);

        return view('vista', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $item = Ingredientes::find($id);

        return view('welcome', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $item = Ingredientes::find($id);

        $item->nombre = $request->nombre;
        $item->cantidad = $request->cantidad;
        $item->fecha_vencimiento = $request->fecha_vencimiento;
        $item->nombre_proveedor = $request->proveedor;

        $item->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $item = Ingredientes::find($id);
        $item->delete();

        return back();
    }
}
