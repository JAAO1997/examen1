<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function agregarcontacto(){
        return view('crearEntrada');
}

public function buscar(){
    return view('buscar');
}

public function eliminar(){
    return view('eliminar');
}
}