<?php

namespace App\Http\Controllers;

use App\equipo;
use App\visitante;
use App\asistencia;
<<<<<<< HEAD
=======
use App\auditoria;
>>>>>>> version-developer-1.23
use App\departamentos;
use App\motivo;
use App\carnet_ingreso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD

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
=======
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class VisitanteController extends Controller{
    public function index(Request $request){
    
        //$datos['visitor'] = visitante::paginate(8);

        $busqueda = $request->get('buscar');
        $datos['visitor']= visitante::JOIN("carnet_ingresos", "carnet_ingresos.car_id", "=", "visitantes.vi_car_id")
                                    ->JOIN("asistencias", "asistencias.asi_car_id", "=", "visitantes.vi_car_id")
                                    ->JOIN("departamentos", "asistencias.asi_dep_id", "=", "departamentos.dep_id")
                                    ->where('vi_nombre', 'like', '%'.$busqueda.'%')
                                    ->orWhere('vi_cedula', '=', $busqueda)
                                    ->orderBy('vi_id', 'asc')
                                    ->paginate(10); 
        $datos['card'] = carnet_ingreso::orderBy('carnet_ingresos.car_id', 'asc')->paginate(100);
        $datos['departments'] = departamentos::paginate(100);
        return view('visitor.list-visitor', $datos);
    }
    public function create(){   
        return view('visitor.new-visitor');
    }

    public function selects(){   
      
        $datos['departments'] = departamentos::paginate(100);
        $datos['reasons'] = motivo::paginate(100);
        $datos['ingreso'] = carnet_ingreso::orderBy('carnet_ingresos.car_id', 'asc')->paginate(100);
        return view('visitor.registro_visitantes', $datos);
    }

    public function getBrowser($user_agent){
       
        if(strpos($user_agent,'MSIE') !== FALSE)
            return'Internet explorer';
        elseif(strpos($user_agent,'Edge') !== FALSE) //Microsoft Edge
            return'Microsoft Edge';
        elseif(strpos($user_agent,'Trident') !== FALSE) //IE 11
            return'Internet explorer';
        elseif(strpos($user_agent,'Opera Mini') !== FALSE)
            return "Opera Mini";
        elseif(strpos($user_agent,'Opera') || strpos($user_agent,'OPR') !== FALSE)
            return "Opera";
        elseif(strpos($user_agent,'Firefox') !== FALSE)
            return'Mozilla Firefox';
        elseif(strpos($user_agent,'Chrome') !== FALSE)
            return'Google Chrome';
        elseif(strpos($user_agent,'Safari') !== FALSE)
            return "Safari";
        else
            return'No hemos podido detectar su navegador';
    }

    public function store(Request $request)
    {
        /*dd($request->all());*/

        $fecha_a = new Carbon;
>>>>>>> version-developer-1.23

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
<<<<<<< HEAD
            'asi_entrada'    => 'Required',
        ]);
        
       
        $descripcion = "este usuario no posee equipo que registrar";
        if($data['eq_nombre'] == null){
            $equipament = equipo::create([
                'eq_nombre'      =>$data['eq_nombre'],
=======
            /*'asi_entrada'    => 'Required',*/
        ]);
        
        
        $nombre_eq = "no hay equipo";
        $descripcion = "este usuario no posee equipo que registrar";
        if($data['eq_nombre'] == null){
            $equipament = equipo::create([
                'eq_nombre'      =>$nombre_eq,
>>>>>>> version-developer-1.23
                'eq_descripcion' =>$descripcion,
            ]);
        }else{
            $equipament = equipo::create([
                'eq_nombre'      =>$data['eq_nombre'],
                'eq_descripcion' =>$data['eq_descripcion'],
            ]);
        }
<<<<<<< HEAD
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
=======

        /* Codigo para guardar foto  */
        $namePhoto= $_POST['vi_cedula'];
        $nombreImagenGuardada = "vis" . $namePhoto . ".png";//se le agregar nombrea la imagen
        $imagenCodificadaLimpia = $_POST['base64'];
        $base_to_php = explode(',', $imagenCodificadaLimpia);
        $fotoo = base64_decode($base_to_php[1]);
        $filepath = $_SERVER['DOCUMENT_ROOT'].'/SVC/public/imagenes/'. $nombreImagenGuardada;
        file_put_contents($filepath, $fotoo);
        

        $visitor = new visitante;
        $visitor->vi_nombre = $data['vi_nombre'];
        $visitor->vi_apellido = $data['vi_apellido'];
        $visitor->vi_cedula = $data['vi_cedula'];
        $visitor->vi_telefono = $data['vi_telefono'];
        $visitor->vi_domicilio = $data['vi_domicilio'];
        $visitor->vi_car_id = $data['vi_car_id'];
        $visitor->vi_responsable = $data['vi_responsable'];
        $visitor->vi_mt_id = $data['vi_mt_id'];
        $visitor->vi_eq_id = $equipament->eq_id;
        $visitor->vi_photo = $nombreImagenGuardada;
        $visitor->save();
>>>>>>> version-developer-1.23
        
        asistencia::create([
            'asi_dep_id'  =>$data['asi_dep_id'],
            'asi_car_id'  =>$data['vi_car_id'],
<<<<<<< HEAD
            'asi_entrada' =>$data['asi_entrada'],
        ]);
        
        return redirect('/list-visitor');
    } 

    /*foreach departamentos */


=======
            'asi_entrada' =>$fecha_a->toTimeString(),
            'asi_fecha_entrada' =>$fecha_a->toDateString(),
        ]);
        
        $status = TRUE;
        $card_status = DB::table('carnet_ingresos')
          ->where('car_id', '=', $data['vi_car_id'])
          ->update(['car_status' => $status]); 
        

        //Auditoria
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $navegador = $this->getBrowser($user_agent);

        $aud = new auditoria;
        $audId = 'au_id';
        $aud->au_tipo = strtoupper('Visitante nuevo');
        $aud->au_so = PHP_OS.'-'.php_uname();
        $aud->au_navegador = $navegador;
        $aud->au_fecha = $fecha_a->toDateTimeString();
        $aud->au_maquina = gethostname();
        $aud->au_ip_maquina = $_SERVER['REMOTE_ADDR'];
        $aud->au_us_id = auth()->user()->us_id;
        $aud->save();

        return redirect('/list-visitor');
    } 

    public function mark_exit(Request $request, asistencia $visitantes){
        
        $visitantes->update($request->all());

        $data_update = request([
            'vi_car_id'
        ]);
        
        $status_false = FALSE;
        $card_status = DB::table('carnet_ingresos')
          ->where('car_id', '=', $data_update['vi_car_id'])
          ->update(['car_status' => $status_false]); 

        $fecha_b = new Carbon; 
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $navegador = $this->getBrowser($user_agent);

        $aud = new auditoria;
        $audId = 'au_id';
        $aud->au_tipo = strtoupper('Le Dio Salida a un Visitante');
        $aud->au_so = PHP_OS.'-'.php_uname();
        $aud->au_navegador = $navegador;
        $aud->au_fecha = $fecha_b->toDateTimeString();
        $aud->au_maquina = gethostname();
        $aud->au_ip_maquina = $_SERVER['REMOTE_ADDR'];
        $aud->au_us_id = auth()->user()->us_rol_id;
        $aud->save();
        return redirect('/list-visitor');
    }

    public function mark_entry(Request $request){
        $fecha_a = new Carbon;

        $data_mark_entry = request()->validate([
            'asi_dep_id' => 'required|integer',
            'asi_car_id' => 'required|integer',
        ]);
        
        asistencia::create([
            'asi_dep_id'  =>$data_mark_entry['asi_dep_id'],
            'asi_car_id'  =>$data_mark_entry['asi_car_id'],
            'asi_entrada' =>$fecha_a->toTimeString(),
            'asi_fecha_entrada' =>$fecha_a->toDateString(),
        ]);

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $navegador = $this->getBrowser($user_agent);

        $aud = new auditoria;
        $audId = 'au_id';
        $aud->au_tipo = strtoupper('Le Dio Entrada a un Visitante');
        $aud->au_so = PHP_OS.'-'.php_uname();
        $aud->au_navegador = $navegador;
        $aud->au_fecha = $fecha_b->toDateTimeString();
        $aud->au_maquina = gethostname();
        $aud->au_ip_maquina = $_SERVER['REMOTE_ADDR'];
        $aud->au_us_id = auth()->user()->us_rol_id;
        $aud->save();

        return redirect('/list-visitor');
    }
>>>>>>> version-developer-1.23

}
