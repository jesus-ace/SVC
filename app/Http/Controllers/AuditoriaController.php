<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;
use App\auditoria;

class AuditoriaController extends Controller
{
    public function index(Request $request){
        $busqueda = $request->get('buscar');
        $datos['audit'] = usuarios::JOIN("auditorias", "auditorias.au_id", "=", "usuarios.us_id")
                                   ->Where('usuarios.us_cedula', '=', $busqueda)
                                   ->Paginate(10);

        /*$busqueda = $request->get('buscar');

        $busqueda = $request->get('buscar');
        $datos['audit']= auditoria::JOIN('usuarios', 'usuarios.us_id', '=', 'auditorias.au_us_id')
                                  ->Where('usuarios.us_cedula', '=', $busqueda)
                                  ->paginate(5);*/
        return view('mconfig.auditoria', $datos);
    }
}
