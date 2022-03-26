<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funciones;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Funciones = Funciones::select('id', 'id_pelicula', 'id_sala', 'fecha', 'hora')->get();
        return $Funciones;
        
    }

   

}
