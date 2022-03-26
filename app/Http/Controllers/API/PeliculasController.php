<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Peliculas = Peliculas::select('id', 'id_genero', 'nombre', 'director')->get();
        return $Peliculas;
    }

   
}
