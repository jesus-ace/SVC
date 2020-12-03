<?php

namespace App\Http\Controllers;

use App\visitante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index(Request $request){
        //$datos['visitor'] = visitante::paginate(10);
        $busqueda = $request->get('buscar');
        $datos['visitor']= visitante::where('vi_nombre', 'like', '%'.$busqueda.'%')->paginate(5);
        return view('visitor.list-visitor', $datos);
    }

    public function create()
    {
        return view('visitor.new-visitor');
    }

    public function store(Request $request)
    {
        //
        //$datosenviados= request()->all();
        $datosenviados= request()->except('_token');
        visitante::insert($datosenviados);
        return redirect('/list-visitor');
    }
}
