<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;
use App\auditoria;

class AuditoriaController extends Controller
{
    public function index(Request $request){

        $busqueda = $request->get('buscar');
        $datos['audit'] = auditoria::JOIN("usuarios", "usuarios.us_id", "=", "auditorias.au_us_id")
                                   ->Where("us_cedula", "=", $busqueda)
                                   ->Paginate(10);
        return view('mconfig.auditoria', $datos);
    }
}
