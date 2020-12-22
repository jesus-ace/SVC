@extends('layouts.app')

@section('content')
<style>
    body{
        background: #fff;
    }
</style> 
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
@endsection
