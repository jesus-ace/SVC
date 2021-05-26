@extends('layouts.app')

@section('content')
<style>
    body{
        background: #fff;
    }
</style> 
<<<<<<< HEAD
<div class="dashboard" id="dashboard">
            <div class="statistics" id="statistics">
                <fieldset class="fieldset">
                    <legend class="legend">&Aacute;reas con mas ingresos</legend>
                    <div class="by-areas1">
                        Total de personas que ingresaron = 5
                    </div>
                    <div class="by-areas2">
                        Total de personas que ingresaron = 5
                    </div>
                    <div class="by-areas3">
                        Total de personas que ingresaron = 5
                    </div>
                    <div class="by-areas1">
                        Total de personas que ingresaron = 5
                    </div>
                    <div class="by-areas2">
                        Total de personas que ingresaron = 5
                    </div>
                    <div class="by-areas3">
                        Total de personas que ingresaron = 5
                    </div>
                </fieldset>
            </div>
            <div class="graphics">
                <fieldset class="fieldsetG" id="fieldsetG">
                    <legend class="graphic">Informaci&oacute;n variada</legend>
                    <div class="by-area" id="by-area">
                        <h3>Acceso por &aacute;rea</h3>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="entrada-salida" id="es">
                        <div class="entrada">
                          <h3>Entrada</h3>
                          @foreach( $entry as $entrada)
                            <div class="ENTRA">
                              <div class="foto">
                                <img class="fotus" src="image/pruebas2.jpeg" alt="">
                              </div>
                              <table class="EN-SA">
                                <thead class="EN-SA_thead">
                                  <th class="EN-SA_th">Nro carnet</th>
                                  <th class="EN-SA_th">Hora Entrada</th>
                                  <th class="EN-SA_th">Hora Slida</th>
                                </thead>
                                <tbody class="EN-SA_td">
                                  <td class="EN-SA_td">{{$entrada->car_id}}</td>
                                  <td class="EN-SA_td">{{$entrada->asi_entrada}}</td>
                                  <td class="EN-SA_td">conta</td>
                                </tbody>
                              </table>
                            </div>
                          @endforeach
                        </div>
                      <div class="salir">
                        <h3>Salida</h3>
                        <div class="SALI">
                            <div class="foto"><img class="fotus" src="image/prueba3.jpg" alt=""></div>
                            <table class="EN-SA">
                              <thead class="EN-SA_thead">
                                <th class="EN-SA_th">Nro carnet</th>
                                <th class="EN-SA_th">Entrada</th>
                                <th class="EN-SA_th">Salida</th>
                              </thead>
                              <tbody class="EN-SA_td">
                                <td class="EN-SA_td">15</td>
                                <td class="EN-SA_td">09:05</td>
                                <td class="EN-SA_td"> 10:20</td>
                              </tbody>
                            </table>
                        </div>
                        <div class="SALI">
                            <div class="foto"><img class="fotus" src="image/prueba3.jpg" alt=""></div>
                            <table class="EN-SA">
                              <thead class="EN-SA_thead">
                                <th class="EN-SA_th">Nro carnet</th>
                                <th class="EN-SA_th">Entrada</th>
                                <th class="EN-SA_th">Salida</th>
                              </thead>
                              <tbody class="EN-SA_td">
                                <td class="EN-SA_td">15</td>
                                <td class="EN-SA_td">09:05</td>
                                <td class="EN-SA_td"> 10:20</td>
                              </tbody>
                            </table>
                        </div>
                        <div class="SALI">
                          <div class="foto"><img class="fotus" src="image/pruebas2.jpeg" alt=""></div>
                          <table class="EN-SA">
                            <thead class="EN-SA_thead">
                              <th class="EN-SA_th">Nro carnet</th>
                              <th class="EN-SA_th">Entrada</th>
                              <th class="EN-SA_th">Salida</th>
                            </thead>
                            <tbody class="EN-SA_td">
                              <td class="EN-SA_td">14</td>
                              <td class="EN-SA_td">09:05</td>
                              <td class="EN-SA_td"> 10:20</td>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 8, 5, 2, 0, 0, 5]
                }]
            },
            options: {}
        });
  </script>  
  <script>
    /*Modulo de dashboard*/
    var btnabrir = document.getElementById('abrir');

    btnabrir.addEventListener("click", function(){
        btnabrir.classList.add('hover');
        brrLateral.classList.add('active');
        dashboard.classList.add('active');
        statistics.classList.add('active');
        fieldsetG.classList.add('active');
    });
    function ocultar(){
        btnabrir.classList.remove('hover');
        brrLateral.classList.remove('active');
        dashboard.classList.remove('active');
        statistics.classList.remove('active');
        fieldsetG.classList.remove('active');
    }
  </script>
=======
<div class="row mx-auto" >
  <fieldset class="fieldset col-11 px-0 mx-auto mt-4" name="fieldset">
    <legend class="legend">&Aacute;reas con mas ingresos</legend>
      <div class="row mx-auto px-0 justify-content-center justify-content-md-start">
        <div class="by-areas1 col-md-3 mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas2  col-md-3 mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas3 col-md-3 mb-3">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas1 col-md-3  mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas2 col-md-3  mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas3 col-md-3 mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas1 col-md-3  mb-3 ">
          Total de personas que ingresaron = 5
        </div>
        <div class="by-areas2 col-md-3 mb-3 ">
          Total de personas que ingresaron = 5
        </div>
      </div>
  </fieldset>

  <fieldset class="fieldset col-11 d-flex px-0 mx-auto mt-4" name="graphics">
    <legend class="graphic">Informaci&oacute;n Variada</legend>
    <div class="row px-0 mx-0 w-100">
      <div class="by-area col-6" id="by-area">
        <h3>Acceso por &aacute;rea</h3>
        <canvas id="myChart" class="img-responsive"></canvas>
      </div>
      <div class="entrada-salida d-none d-md-flex col-6  px-0 mx-0" id="es">
        <div class="entrada col-6">
          <h3>Entrada</h3>
          @foreach( $entry as $entrada)
            <figure>
              <div class="ENTRA row">
                <div class="foto col-2">
                    <a href="#thumb" class="thumbnail">
                      <img class="fotus" src="imagenes/{{$entrada->vi_photo}}"  width="60px" height="60px" style="border-radius: 10px 2px 10px 2px; top:-5px;">
                      <span>
                        <img src="imagenes/{{$entrada->vi_photo}}" width="180px" height="160px">
                      </span>
                    </a>
                </div>
                <div class="col-8">
                  <table class="EN-SA">
                    <thead class="EN-SA_thead">
                      <th class="EN-SA_th">Nro carnet</th>
                      <th class="EN-SA_th">Hora Entrada</th>
                    </thead>
                    <tbody class="EN-SA_td">
                      <td class="EN-SA_td">{{$entrada->car_id}}</td>
                      <td class="EN-SA_td">{{$entrada->asi_entrada}}</td>
                    </tbody>
                  </table>
                </div>
              </div>
              <figcaption class="more-info-entry">
                <strong>Nombre y Apellido:</strong> {{$entrada->vi_nombre}} {{$entrada->vi_apellido}} <br>
                <strong>Departamento de Ingreso:</strong> {{$entrada->dep_nombre}} <br>
                <strong>Responsable:</strong> {{$entrada->vi_responsable}}.
              </figcaption>
            </figure>                    
          @endforeach
        </div>
        <div class="salir col-6">
          <h3>Salida</h3>
          @foreach( $exit as $salida)
            <figure>
              <div class="SALI row">
                <div class="foto col-2">
                  <a href="#thumb" class="thumbnail">
                    <img class="fotus" src="imagenes/{{$salida->vi_photo}}"  width="60px" height="60px" style="border-radius: 10px 2px 10px 2px; top:-5px;">
                    <span><img src="imagenes/{{$salida->vi_photo}}" width="180px" height="160px"></span>
                  </a>    
                </div>
                <div class="col-8">
                  <table class="EN-SA">
                    <thead class="EN-SA_thead">
                      <th class="EN-SA_th">Nro carnet</th>
                      <th class="EN-SA_th"> Hora Salida</th>
                    </thead>
                    <tbody class="EN-SA_td">
                      <td class="EN-SA_td">{{$salida->car_id}}</td>
                      <td class="EN-SA_td">{{$salida->asi_salida}}</td>
                    </tbody>
                  </table>
                </div>
              </div>
              <figcaption class="more-info-exit">
                <strong>Nombre y Apellido:</strong>  {{$salida->vi_nombre}} {{$salida->vi_apellido}} <br>
                <strong>Departamento de Ingreso:</strong> {{$salida->dep_nombre}} <br>
                <strong>Responsable:</strong> {{$salida->vi_responsable}}.
              </figcaption>
            </figure>
          @endforeach
      </div>
    </div>            
  </fieldset>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 8, 5, 2, 0, 0, 5]
          }]
        },
        options: {}
      });
</script>  
>>>>>>> version-developer-1.23
@endsection
