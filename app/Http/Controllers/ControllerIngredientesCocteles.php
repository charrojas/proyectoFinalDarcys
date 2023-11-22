<?php

namespace App\Http\Controllers;

use App\Models\IngredienteCoctel;
use Illuminate\Http\Request;

class ControllerIngredientesCocteles extends Controller
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
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new IngredienteCoctel();

        $item->id_ingrediente = $request->id_ingrediente;
        $item->id_coctel = $request->id_coctel;
        $item->cantidad = $request->cantidad;
     
 
        $item->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $it = IngredienteCoctel::find($id);

        return view('edit', compact('ite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = IngredienteCoctel::find($id);
        $item->delete();
        return redirect()->back();
    }
}
