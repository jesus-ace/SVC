<?php
use Carbon\Carbon;

$fecha_b = new Carbon; 
$actual = $fecha_b->toDateString();
$actual_h =  $fecha_b->toTimeString();

?>

@extends('layouts.app')
@section('content')
  @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  @endsection
<div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
  <div class="col-auto">
    <div class="row px-5 mb-5 mt-5">
      <div class="col-12">
        <h3>Listado de Visitante</h3>
        <table class="col-12 col-md-12" id="visitor-table">
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
          <a class="btn regisV" id="btnRV"  href="{{ route('new-visitor') }}" >VISITANTE<i class="fas fa-plus"></i></a>
          <thead>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">C&eacute;dula</th>
              <th scope="col">Telefono</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Responsable</th>
              <th scope="col">Acciones</th>
          </thead>
          <tbody>
              @foreach( $visitor as $visitantes)
                <tr>
                  <td>{{$visitantes->vi_nombre}}</td>
                  <td>{{$visitantes->vi_apellido}}</td>
                  <td>{{$visitantes->vi_cedula}}</td>
                  <td>{{$visitantes->vi_telefono}}</td>
                  <td style="font-size: 12px;">{{$visitantes->vi_domicilio}}</td>
                  <!--td style="font-size: 8px;">{{$visitantes->vi_domicilio}}</td-->
                  <td>{{$visitantes->vi_responsable}}</td>
                  <td>ver mas
                    <button type="button" data-toggle="modal" data-target="#modal{{$visitantes->vi_id}}" class="far fa-eye"></button>
                    <div class="modal fade" id="modal{{$visitantes->vi_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                          <h3>{{$visitantes->vi_nombre}} {{$visitantes->vi_apellido}}</h3>
                          <div class="acomodar">
                            <div class="contenido">
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
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Responsable</span>
                                </div>
                                <input type="text" name="vi_responsable" class="form-control" value="{{$visitantes->vi_responsable}}" disabled='disabled'>
                              </div>
                              <!--div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">&Aacute;rea a ingresar</span>
                                </div>
                                <select name="asi_dep_id" class="form-control select custom-select">
                                  <option value="{{$visitantes->dep_id}}">{{$visitantes->dep_nombre}}</option>
                                  @foreach( $departments as $departamento)
                                  <option value="{{$departamento->dep_id}}">{{$departamento->dep_nombre}}</option>
                                  @endforeach
                                </select>
                              </div-->
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Nro carnet</span>
                                </div>
                                <select name="asi_car_id" id="asi_car_id" class="form-control select custom-select">
                                  <option value="{{$visitantes->vi_car_id}}">{{$visitantes->vi_car_id}}</option>
                                  @foreach( $card as $car_ingreso)
                                    <option value="{{$car_ingreso->car_id}}">{{$car_ingreso->car_id}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Hora de ingreso</span>
                                </div>
                                <input type="text" name="asi_entrada" class="form-control" value="{{$visitantes->asi_entrada}}" disabled='disabled'>
                              </div>
                                @if($visitantes->asi_salida == null &&  $visitantes->asi_fecha_salida == null)
                                  <form action="{{ route('list_visitor.update', $visitantes->asi_id)}} " method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('PATCH')}}
                                    <input type="text" name="asi_salida" class="form-control" value="<?php echo $actual_h;?>" hidden>
                                    <input Type="text" name="asi_fecha_salida" value="<?php echo $actual;?>" hidden >
                                    <input type="text" name="vi_car_id" value="{{$visitantes->vi_car_id}}" hidden>
                                    <button type="submit" class="salida">Marcar Salida</button>
                                  </form>
                                @else
                                  <form action="{{ route('mark_entry')}} " method="POST">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">&Aacute;rea a ingresar</span>
                                      </div>
                                      <select name="asi_dep_id" class="form-control select custom-select">
                                        <option value="{{$visitantes->dep_id}}">{{$visitantes->dep_nombre}}</option>
                                        @foreach( $departments as $departamento)
                                        <option value="{{$departamento->dep_id}}">{{$departamento->dep_nombre}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <input type="text" name="asi_car_id" class="form-control" value="{{$visitantes->vi_car_id}}" hidden>
                                    <button type="submit" class="marcar_entrada">Marcar Entrada</button>
                                  </form>
                              @endif
                            </div>
                            <div class="box-photo1">
                              <div class="photo1">
                                <img src="imagenes/{{$visitantes->vi_photo}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
        <div class="paginacion mt-2">
          {!!$visitor->render()!!}
        </div>
      </div>
      
    </div>
  </div>
</div>

<!--script src="js/datatable/datatables.min.js"></script>
<-script>
  $('#visitor-table').DataTable();
</script-->
@endsection

