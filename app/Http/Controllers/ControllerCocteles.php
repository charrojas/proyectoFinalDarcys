<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Coctel;
use App\Models\IngredienteCoctel;
use App\Models\Ingredientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCocteles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('cocteles')
        ->join('categorias', 'cocteles.id_categoria', '=', 'categorias.id_categoria')
        ->select('cocteles.*', 'categorias.nombre as nombre_categoria')
        ->get();
        $categoria= Categorias::all();
        
        return view('cocteles.index', compact('data','categoria'));
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
        
        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $item = new Coctel();

        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->precio = $request->precio;
        $item->disponibilidad = true;
        $item->img = $imageName;
        $item->id_categoria = $request->id_categoria;

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
        $ite = Coctel::find($id);
        $cat=DB::table('cocteles')
        ->join('categorias', 'cocteles.id_categoria', '=', 'categorias.id_categoria')
        ->select('categorias.*')->where('cocteles.id_coctel',$id)->get();
        $ing = IngredienteCoctel::all();
        $ingredientes=Ingredientes::all();
        $datos = $ing->where('id_coctel', '=', $id);
        $cate=Categorias::all();

        return view('cocteles.edit', compact('ite','ing', 'datos','cat','cate','ingredientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Coctel::find($id);

        $imagenAntigua = $item->img;

        if ($request->hasFile('nueva_img')) {
           
            if ($imagenAntigua) {
                $imagenAntiguaPath = public_path('img') . '/' . $imagenAntigua;

                if (file_exists($imagenAntiguaPath)) {
                    unlink($imagenAntiguaPath);
                }
            }

            $imageName = time() . '.' . $request->nueva_img->extension();
            $request->nueva_img->move(public_path('img'), $imageName);

            $item->img = $imageName;
        }

        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->precio = $request->precio;
        $item->disponibilidad = $request->disponibilidad;
        $item->id_categoria = $request->id_categoria;

        $item->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Coctel::find($id);

        if ($item->img) {
            $imagePath = public_path('img') . '/' . $item->img;

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $item->delete();

        return redirect()->back();
    }
}
