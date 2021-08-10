<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\visitante;
use App\departamentos;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$fecha_a = new Carbon; 
        $actual= $fecha_a->toDateString();

        
        $entrada['entry']= visitante::JOIN("carnet_ingresos", "carnet_ingresos.car_id", "=", "visitantes.vi_car_id")
                                    ->JOIN("asistencias", "carnet_ingresos.car_id", "=", "asistencias.asi_car_id")
                                    ->JOIN("departamentos", "departamentos.dep_id", "=", "asistencias.asi_dep_id")
                                    ->SELECT("vi_nombre", "vi_apellido", "vi_photo", "car_id", "asi_entrada", "asi_salida", "dep_nombre", "vi_responsable")
                                    ->WhereNull('asi_salida')
                                    ->Where('asi_fecha_entrada', '=', $actual)
                                    ->orderBy('asi_entrada', 'desc')
                                    ->paginate(3);

        $salida['exit']= visitante::JOIN("carnet_ingresos", "carnet_ingresos.car_id", "=", "visitantes.vi_car_id")
                                    ->JOIN("asistencias", "carnet_ingresos.car_id", "=", "asistencias.asi_car_id")
                                    ->JOIN("departamentos", "departamentos.dep_id", "=", "asistencias.asi_dep_id")
                                    ->SELECT("vi_nombre", "vi_apellido", "vi_photo", "car_id", "asi_entrada", "asi_salida", "dep_nombre", "vi_responsable")
                                    ->Where('asi_fecha_salida', '=', $actual)
                                    ->orderBy('asi_salida', 'desc')
                                    ->paginate(3);*/

        //$departamento = departamentos:: SELECT("dep_nombre");                          
        //return view('dashboard',$entrada, $salida);
        return view('dashboard');
    }

}
