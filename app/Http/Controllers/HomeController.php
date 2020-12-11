<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\visitante;
use App\departamentos;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrada['entry']= visitante::JOIN("carnet_ingresos", "carnet_ingresos.car_id", "=", "visitantes.vi_car_id")
                                    ->JOIN("asistencias", "carnet_ingresos.car_id", "=", "asistencias.asi_car_id")
                                    ->SELECT("vi_nombre", "car_id", "asi_entrada")
                                    ->orderBy('asi_entrada', 'desc')->paginate(3);

        //$departamento = departamentos:: SELECT("dep_nombre");                          
        return view('dashboard',$entrada);
    }

}
