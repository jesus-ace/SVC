@extends('layouts.app')

@section('content')
<div class="list-vigilante" id="list-vigilante">
    <h3>Listado de Vigilante</h3>
    <table>
        <div class="buscador">
            <form>
                <div class="input-group buscador">
                    <input type="search"  class="busca" name="buscar" id="buscar" placeholder="Nro c&eacute;dula">
                    <span class=" input-group-btn">
                        <button class="buscar"><i class="fas fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        <a class="btn regisV" id="btnRV"  href="{{ route('register') }}" >Vigilante<i class="fas fa-plus"></i></a>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>c&eacute;dula</th>
            <th>User name</th>
            <th>correo</th>
            <!--th>Fecha de Registro</th>
            <th>Ultima Modificaci&oacute;n</th-->
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach( $user as $usuario)
                <tr>
                    <td>{{$usuario->us_nombre}}</td>
                    <td>{{$usuario->us_apellido}}</td>
                    <td>{{$usuario->us_cedula}}</td>
                    <td>{{$usuario->us_user}}</td>
                    <td>{{$usuario->us_correo}}</td>
                    <td>ver mas
                    <a data-toggle="modal" data-target="#more-{{$usuario->us_id}}" data-whatever="@mdo"><i class="far fa-eye"></i></a>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <section class="paginacion">
        <!--ul>
            <li><a href="" class="active">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
        </ul-->
        {!!$user->render()!!}
    </section>
</div> 
<!--script src="/js/script.js"></script-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

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
<div class="modal fade" id="more-{{$usuario->us_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form method="POST" action="{{ route('list_vigilante.update', $usuario) }}">
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
            </div>
            <div class="box-photo1">
                <img src="imagenes/{{$usuario->us_photo }}" alt="Foto de perfil">
                <button type="reset" class="Editar" id="edit" onclick='activar(); alert("Los campos se han habilitados para su edici&oacute;n")'>Editar<i class="far fa-edit"></i></button>
                <button type="reset" class="Eliminar" id="delete">Eliminar<i class="fas fa-user-slash"></i></button>
            </div>
          </div>
          <button class="btn regisNE" id="btnRNE" onclick="desactivar();" >No Editar<i class="fas fa-ban"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
