<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\auditoria;

class AuditoriaController extends Controller
{
    public function index(Request $request){

        $busqueda = $request->get('buscar');
        $datos['audit'] = auditoria::JOIN("usuarios", "usuarios.us_id", "=", "auditorias.au_us_id")
                                   ->Where("us_cedula", "=", $busqueda)
                                   ->Select("au_ip_maquina", "au_maquina", "au_so", "au_navegador", "au_tipo", "au_fecha", "us_user")
                                   ->paginate(20);
                                   
        return view('mconfig.auditoria', $datos);
    }
}
