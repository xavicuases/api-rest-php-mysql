<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(Categoria::all(),200);

    }

    public function getCategoriaxid($id){
        $categoria = categoria::find($id);
        if (is_null($categoria)){
            return response()->json(['Mensaje'=>'Regsitro no encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }
}
