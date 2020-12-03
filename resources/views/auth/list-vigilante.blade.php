@extends('layouts.app')
@section('content')
<div class="list-vigilante" id="list-vigilante">
    <h3>Listado de Vigilante</h3>
    <table>
        <div class="buscador">
            <form>
                <div class="input-group buscador">
                    <input type="search"  class="busca" name="buscar" id="buscar" placeholder="Ingrese Usuario">
                    <span class=" input-group-btn">
                        <button type="submit" class="buscar"><i class='fas fa-search'></i></button>
                    </span>
                </div>
            </form>
        </div>
        <a class="btn regisV" id="btnRV"  href="{{ route('register') }}" >Vigilante<i class="fas fa-plus"></i></a>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>c&eacute;dula</th>
            <th>correo</th>
            <th>User name</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach( $users as $usuario)
                <tr>
                    <td>{{$usuario->us_nombre}}</td>
                    <td>{{$usuario->us_apellido}}</td>
                    <td>{{$usuario->us_cedula}}</td>
                    <td>{{$usuario->us_correo}}</td>
                    <td>{{$usuario->us_user}}</td>
                    <td>ver mas
                      <button type="button" data-toggle="modal" data-target="#modal{{$usuario->us_id}}" class="far fa-eye"></button>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <section class="paginacion">
        {!!$users->render()!!}
    </section>
</div> 

<script>
    function activar()
    {
	    document.getElementById('cedula').disabled = false;
	    document.getElementById('correo').disabled = false;
	    document.getElementById('user-n').disabled = false;
        document.getElementById('edit').classList.add('active');
        document.getElementById('delete').classList.add('active');
	    document.getElementById('btnRE').classList.add('active');
	    document.getElementById('btnRNE').classList.add('active');
    }
    function desactivar()
    {
	    document.getElementById('cedula').disabled = true;
        document.getElementById('correo').disabled = true;
	    document.getElementById('user-n').disabled = true;
	    document.getElementById('btnRE').classList.remove('active');
	    document.getElementById('btnRNE').classList.remove('active');
        document.getElementById('edit').classList.remove('active');
        document.getElementById('delete').classList.remove('active');
    }
</script>

@endsection
@section('modal')
<div class="modal fade" id="modal{{$usuario->us_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <h3>{{$usuario->us_nombre}} {{$usuario->us_apellido}}</h3>
          <div class="acomodar">
            <div class="info">
              <!--Formulario par editar un usuario -->
              <form id='formeditar' class="Editar-usuario" method="POST" action="{{ route('list_vigilante.update', $usuario) }}">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">C&eacute;dula:</span>
                  </div>
                  <input type="text" name="us_cedula" class="form-control" id="cedula" value="{{$usuario->us_cedula}}" disabled='disabled'>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">User name</span>
                  </div>
                  <input type="text" name="us_user" id="user-n" class="form-control" value="{{$usuario->us_user}}" disabled='disabled'>
                </div>  
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">correo</span>
                  </div>
                  <input type="text" name="us_correo" class="form-control" id="correo" value="{{$usuario->us_correo}}" disabled=''>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">F.Registro</span>
                  </div>
                  <input type="text" name="fr" id="Fr" class="form-control" value="{{$usuario->created_at}}" disabled='disabled'>
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">U. Modificaci&oacute;n</span>
                  </div>
                  <input type="text" name="updated_at" id="Fr" class="form-control" value="{{$usuario->updated_at}}" disabled='disabled'>
                </div>
                <button type="submit" class="btn regisE" id="btnRE" >Guardar<i class="fas fa-save"></i></button>
              </form>
              <!--Formulario para eliminar usuario (cambia la columna us_estatus a 0 y con condiciones en la rutas no le permitira el acceso a las vistas)-->
              <form method="POST" action="{{ route('list_vigilante.update', $usuario) }}" class="Eliminar-usuario" id="formeliminar">
                {{ csrf_field() }}
                {{method_field('PATCH')}}
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">¿Deseas Eliminarlo?</span>
                  </div>
                  <select name="us_estatus" id="us_estatus" class="form-control select custom-select">
                    <option value="{{$usuario->us_estatus}}">No</option>
                    <option value="0">Si</option>
                  </select>
                </div>
                <button type="submit" class="btn regisE" id="btnRA" >Aceptar<i class="fas fa-save"></i></button>
              </form>
            </div>
            <div class="box-photo1">
                <img src="imagenes/{{$usuario->us_photo }}" alt="Foto de perfil">
                <button type="reset" class="Editar" id="edit" onclick='activar(); alert("Los campos se han habilitados para su edici&oacute;n")'>Editar<i class="far fa-edit"></i></button>
                <button type="reset" class="Eliminar" id="delete" onclick="eliminar();">Eliminar<i class="fas fa-user-slash"></i></button>
            </div>
          </div>
          <button class="btn regisNE" id="btnRNE" onclick="desactivar();" >No Editar<i class="fas fa-ban"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
