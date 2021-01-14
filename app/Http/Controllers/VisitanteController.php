<?php

namespace App\Http\Controllers;

use App\equipo;
use App\visitante;
use App\asistencia;
use App\departamentos;
use App\motivo;
use App\carnet_ingreso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index(Request $request){
        //$datos['visitor'] = visitante::paginate(8);
        $busqueda = $request->get('buscar');
        $datos['visitor']= visitante::where('vi_nombre', 'like', '%'.$busqueda.'%')
                                    ->orWhere('vi_cedula', '=', $busqueda)
                                    ->paginate(8);

        return view('visitor.list-visitor', $datos);
    }

    public function create()
    {   
        return view('visitor.new-visitor');
    }

    public function selects()
    {   
        $datos['departments'] = departamentos::paginate();
        $datos['reasons'] = motivo::paginate();
        $datos['ingreso'] = carnet_ingreso::orderBy('carnet_ingresos.car_id', 'asc')->paginate();
        return view('visitor.registro_visitantes', $datos);
    }

    public function store(Request $request)
    {
        //return $request->all();

        $data= request()->validate([
            'vi_nombre'      => 'required',
            'vi_apellido'    => 'required',
            'vi_cedula'      => 'required|integer|unique:visitantes',
            'vi_telefono'    => 'required',
            'vi_domicilio'   => 'required',
            'vi_car_id'      => 'Required',
            'vi_responsable' => 'required',
            'vi_mt_id'       => 'required',
            'vi_eq_id'       => 'integer',
            'vi_photo'       => 'max:255',
            'created_at'     => 'timestamp',
            'updated_at'     => 'timestamp',

            'eq_nombre'      => 'max:255',
            'eq_descripcion' => 'max:255',

            'asi_dep_id'     => 'Max:255',
            'asi_car_id'     => 'Max:255',
            'asi_entrada'    => 'Required',
        ]);
        
       
        $descripcion = "este usuario no posee equipo que registrar";
        if($data['eq_nombre'] == null){
            $equipament = equipo::create([
                'eq_nombre'      =>$data['eq_nombre'],
                'eq_descripcion' =>$descripcion,
            ]);
        }else{
            $equipament = equipo::create([
                'eq_nombre'      =>$data['eq_nombre'],
                'eq_descripcion' =>$data['eq_descripcion'],
            ]);
        }
        $namePhoto= $_POST['vi_cedula'];
        $nombreImagenGuardada = "vis" . $namePhoto . ".png";//se le agregar nombrea la imagen
        //$imagenCodificada = file_get_contents("php://input");
        $imagenCodificadaLimpia = $_POST['base64'];
        $base_to_php = explode(',', $imagenCodificadaLimpia);
        $fotoo = base64_decode($base_to_php[1]);
        $filepath = $_SERVER['DOCUMENT_ROOT'].'/imagenes/'. $nombreImagenGuardada;
        //$imagenDecodificada = base64_decode($imagenCodificadaLimpia);//decodifica imagen
        file_put_contents($filepath, $fotoo);

        visitante::insert([
            'vi_photo'      =>$nombreImagenGuardada,
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
        
        asistencia::create([
            'asi_dep_id'  =>$data['asi_dep_id'],
            'asi_car_id'  =>$data['vi_car_id'],
            'asi_entrada' =>$data['asi_entrada'],
        ]);
        
        return redirect('/list-visitor');
    } 

    /*foreach departamentos */



}
