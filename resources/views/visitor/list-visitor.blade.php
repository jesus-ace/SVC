@extends('layouts.app')
@section('content')
<div class="list-vigilante" id="list-vigilante">
    <h3>Listado de Visitante</h3>
    <table>
        <div class="buscador">
            <form>
                <div class="input-group buscador">
                    <input type="search"  class="busca" name="buscar" id="buscar" placeholder="Ingrese cedula">
                    <span class=" input-group-btn">
                        <button type="submit" class="buscar"><i class='fas fa-search'></i></button>
                    </span>
                </div>
            </form>
        </div>
        <a class="btn regisV" id="btnRV"  href="{{ route('new-visitor') }}" >Visitante<i class="fas fa-plus"></i></a>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>c&eacute;dula</th>
            <th>Telefono</th>
            <th>Domicilio</th>
            <th>Responsable</th>
            <th>acciones</th>
        </thead>
        <tbody>
            @foreach( $visitor as $visitantes)
                <tr>
                    <td>{{$visitantes->vi_nombre}}</td>
                    <td>{{$visitantes->vi_apellido}}</td>
                    <td>{{$visitantes->vi_cedula}}</td>
                    <td>{{$visitantes->vi_telefono}}</td>
                    <td>{{$visitantes->vi_domicilio}}</td>
                    <td>{{$visitantes->vi_responsable}}</td>
                    <td>ver mas
                      <button type="button" data-toggle="modal" data-target="#modal{{$visitantes->vi_id}}" class="far fa-eye"></button>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <section class="paginacion">
        {!!$visitor->render()!!}
    </section>
</div> 
@endsection
@section('modal')
<div class="modal fade" id="modal{{$visitantes->vi_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3>{{$visitantes->vi_nombre}} {{$visitantes->vi_apellido}}</h3>
                <div class="acomodar">
                <div class="info">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">C&eacute;dula</span>
                        </div>
                        <input type="text" name="vi_cedula" class="form-control" value="{{$visitantes->vi_cedula}}" disabled='disabled'>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Contacto</span>
                        </div>
                        <input type="text" name="vi_telefono" class="form-control" value="{{$visitantes->vi_telefono}}" disabled='disabled'>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Domicilio</span>
                        </div>
                        <input type="text" name="contacto" class="form-control" value="{{$visitantes->vi_domicilio}}" disabled='disabled'>
                    </div>
                    <!---div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nro carnet</span>
                        </div>
                        <input type="number" name="contacto" class="form-control" value="20" disabled='disabled'>
                    </div-->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">&Aacute;rea de Ingreso</span>
                        </div>
                        <input type="text" name="contacto" class="form-control" value="tecnolog&iacute;a" disabled='disabled'>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Responsable</span>
                        </div>
                        <input type="text" name="vi_responsable" class="form-control" value="{{$visitantes->vi_responsable}}" disabled='disabled'>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Hora de ingreso</span>
                        </div>
                        <input type="text" name="contacto" class="form-control" value="12:30pm" disabled='disabled'>
                    </div>
                    <button type="reset" class="salida">Marcar salida</button>
                </div>
                <div class="box-photo1">
                    <div class="photo1">
                        <img src="image/pruebas2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection