<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    public function directorio(){
        return view('directorio');
    }

    public function crearEntrada(){
        return view('crearEntrada');
    }
    public function vercontactos(){
        return view('vercontactos');
    }
}
