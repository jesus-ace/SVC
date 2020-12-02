<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;

class List_user extends Controller
{
    public function index(Request $request){
        //$datos['user'] = usuarios::paginate(10);
        $busqueda = $request->get('buscar');
        $datos['user']= usuarios::where('us_estatus', '=', 1 )
                                ->where('us_user', 'like', '%'.$busqueda.'%')
                                ->paginate(5);
        return view('list-vigilante', $datos);
    }

    public function edit($id)
    {
        $datos= usuarios::findOrFail($id);
        return view('list-vigilante',compact('registros'));
    }

    public function update(Request $request, usuarios $usuario)
    {
        $usuario->update($request->all());
        return redirect('/list-vigilante');
    }
}
