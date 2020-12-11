<?php

namespace App\Http\Controllers;

use App\equipo;
use App\visitante;
use App\asistencia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class VisitanteController extends Controller
{
    public function index(Request $request){
        //$datos['visitor'] = visitante::paginate(8);
        $busqueda = $request->get('buscar');
        $datos['visitor']= visitante::where('vi_nombre', 'like', '%'.$busqueda.'%')->paginate(8);
        return view('visitor.list-visitor', $datos);
    }

    public function create()
    {
        return view('visitor.new-visitor');
    }

    public function store()
    {
        $data= request()->validate([
            'vi_nombre'      => 'required',
            'vi_apellido'    => 'required',
            'vi_cedula'      => 'required|integer|unique:visitantes',
            'vi_telefono'    => 'required',
            'vi_domicilio'   => 'required',
            'vi_car_id'      => 'required|integer',
            'vi_responsable' => 'required',
            'vi_mt_id'       => 'required',
            'eq_nombre'      => 'max:255',
            'eq_descripcion' => 'max:255',
            'asi_dep_id'     => 'Max:255',
            'asi_car_id'     => 'Max:255',
            'asi_entrada'    => 'Required',
        ]);
        
        $equipament = equipo::create([
            'eq_nombre'      =>$data['eq_nombre'],
            'eq_descripcion' =>$data['eq_descripcion'],
        ]);
        visitante::insert([
            'vi_nombre'     =>$data['vi_nombre'],
            'vi_apellido'   =>$data['vi_apellido'],
            'vi_cedula'     =>$data['vi_cedula'],
            'vi_telefono'   =>$data['vi_telefono'],
            'vi_domicilio'  =>$data['vi_domicilio'],
            'vi_car_id'     =>$data['vi_car_id'],
            'vi_responsable'=>$data['vi_responsable'],
            'vi_mt_id'      =>$data['vi_mt_id'],
            'vi_eq_id'      =>$equipament->eq_id,
        ]);
        
        asistencia::insert([
            'asi_dep_id'  =>$data['asi_dep_id'],
            'asi_car_id'  =>$data['vi_car_id'],
            'asi_entrada' =>$data['asi_entrada'],
        ]);
        
        return redirect('/list-visitor');
    } 



}

    /*$datosenviados= request()->all();
    $datosenviados= request()->except('_token');
    visitante::insert($datosenviados);
    return redirect('/list-visitor');*/