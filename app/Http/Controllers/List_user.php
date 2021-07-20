<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;
use App\rol;
use App\auditoria;
use Carbon\Carbon;

class List_user extends Controller
{
    public function index(Request $request){
        return datatables()->eloquent(
             usuarios::with(['rols'])
                    ->orderBy('us_id', 'asc')
        )->toJson();
       
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

    /*public function edit($id)
    {
        $datos= usuarios::findOrFail($id);

        $fecha_a = new Carbon; 
        
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $navegador = $this->getBrowser($user_agent);

        $aud = new auditoria;
        $audId = 'au_id';
        $aud->au_tipo = strtoupper('Edito Un Usuario');
        $aud->au_so = PHP_OS.'-'.php_uname();
        $aud->au_navegador = $navegador;
        $aud->au_fecha = $fecha_a->toDateTimeString();
        $aud->au_maquina = gethostname();
        $aud->au_ip_maquina = $_SERVER['REMOTE_ADDR'];
        $aud->au_us_id = auth()->user()->us_rol_id;
        $aud->save();

        //return view('list-vigilante',compact('registros'));
    }*/

    public function edit(Request $request, $id){
        if($request -> validate([
            'us_nombre' =>'required',
            'us_apellido' =>'required',
            'us_cedula' =>'required',
            'us_user' =>'required',
            'us_correo' =>'required'
        ])){
            try{
                $users = usuarios::find($id);
                $users->us_nombre=$request->input('us_nombre');
                $users->us_apellido =$request->input('us_apellido');
                $users->us_user =$request->input('us_user');
                $users->us_correo =$request->input('us_correo');
                $users->save();

                return response('EL usuario se a editado exitosamente', 200);
            }
            catch(\Exception $err){
                return response(json_encode($err), 500);
            }
        }
        else{
            return response (json_encode($err), 500);
        }
    }

    public function update(Request $request, usuarios $usuario){
        $usuario->update($request->all());

        $fecha_a = new Carbon; 
        
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $navegador = $this->getBrowser($user_agent);

        $aud = new auditoria;
        $audId = 'au_id';
        $aud->au_tipo = strtoupper('Elimino Un Usuario');
        $aud->au_so = PHP_OS.'-'.php_uname();
        $aud->au_navegador = $navegador;
        $aud->au_fecha = $fecha_a->toDateTimeString();
        $aud->au_maquina = gethostname();
        $aud->au_ip_maquina = $_SERVER['REMOTE_ADDR'];
        $aud->au_us_id = auth()->user()->us_rol_id;
        $aud->save();

        return redirect('/list-vigilante');
    }
}
