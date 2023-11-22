<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Coctel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ControllerTienda extends Controller
{
    function index() {
        $cocteles = Coctel::take(8)->get();
        $categoria=Categorias::all();
        return view('tienda/tienda' ,compact('cocteles','categoria'));
    }

    function ver_planes(){
        return view('tienda/planes');
    }

    function nosotros(){
        return view('nosotros/index');
    }

    function categorias(){
        return view('tienda/categoria');
    }
    public function mostrarCategoria($id) {
        
        $categoria = Categorias::find($id);
    
        $categorias=Categorias::all();
        $coctelesE = Coctel::where('id_categoria',1)->take(8)->get();
        $coctelesI = Coctel::where('id_categoria',2)->take(8)->get();
        $coctelesT = Coctel::where('id_categoria',3)->take(8)->get();
        $coctelesA = Coctel::where('id_categoria',4)->take(8)->get();
        $cocteles = Coctel::where('id_categoria', $id)->get();
    
       
        return view('tienda.categoria', compact('cocteles','categoria','categorias','coctelesA','coctelesI','coctelesE','coctelesT'));
    }
}