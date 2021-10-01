<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use App\asistencia;
use App\Visitante;
use App\usuarios;
use App\carnetIngreso;


class statisticsController extends Controller
{
    public function getDepAsi(){
        //$asistencias = asistencia::with(['departamentos', 'carnetIngresos.visitantes'])->get();
        //return $asistencias = carnetIngreso::with('visitantes')->get();
        return Visitante::all();
    }
}
