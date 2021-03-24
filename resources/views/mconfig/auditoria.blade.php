@extends('layouts.app')

@section('content')
<div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
    <div class="col-auto">
        <div class="row px-5 mb-5 mt-5">
            <div class="col-12">
                <h3>Auditor&iacute;a</h3>
                <table class="col-12">
                    <div class="buscador-audi">
                        <form>
                            <div class="input-group buscador">
                                <input type="search"  class="busca" name="buscar" id="buscar" placeholder="Nro c&eacute;dula">
                                <span class=" input-group-btn">
                                    <button class="buscar"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                        <thead>
                          <th>IP Maquina</th>
                          <th>Nombre Maquina</th>
                          <th>Sistema Operativo</th>
                          <th>Navegador </th>
                          <th>Id Usuario</th>
                          <th>Accion Realizada</th>
                          <th>Fecha</th>
                        </thead>
                        <tbody>
                        @foreach($audit as $auditoria)
                            <tr>
                                <td>{{$auditoria->au_ip_maquina}}</td>
                                <td>{{$auditoria->au_maquina}}</td>
                                <td style="font-size: 8px;">{{$auditoria->au_so}}</td>
                                <td>{{$auditoria->au_navegador}}</td>
                                <td style="font-size: 12px;">{{$auditoria->us_nombre}} {{$auditoria->us_apellido}}</td>
                                <td style="font-size: 12px;">{{$auditoria->au_tipo}}</td>
                                <td>{{$auditoria->au_fecha}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                <div class="paginacion mt-2">
                    {!!$audit->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection