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
                        <img class="image1" src="image/grafico.png" alt="">
                    </div>
                    <div class="entrada-salida" id="es">
                        <div class="entrada">
                          <h3>Entrada</h3>
                          <div class="ENTRA">
                            <div class="foto"><img class="fotus" src="image/pruebas2.jpeg" alt=""></div>
                              <table class="EN-SA">
                                <thead class="EN-SA_thead">
                                  <th class="EN-SA_th">Nro carnet</th>
                                  <th class="EN-SA_th">Entrada</th>
                                  <th class="EN-SA_th">Restante</th>
                                </thead>
                                <tbody class="EN-SA_td">
                                  <td class="EN-SA_td">21</td>
                                  <td class="EN-SA_td">09:05</td>
                                  <td class="EN-SA_td"> 50min</td>
                                </tbody>
                              </table>
                          </div>
                          <div class="ENTRA">
                            <div class="foto"><img class="fotus" src="image/pruebas2.jpeg" alt=""></div>
                              <table class="EN-SA">
                                <thead class="EN-SA_thead">
                                  <th class="EN-SA_th">Nro carnet</th>
                                  <th class="EN-SA_th">Entrada</th>
                                  <th class="EN-SA_th">Restante</th>
                                </thead>
                                <tbody class="EN-SA_td">
                                  <td class="EN-SA_td">21</td>
                                  <td class="EN-SA_td">09:05</td>
                                  <td class="EN-SA_td"> 50min</td>
                                </tbody>
                              </table>
                          </div>
                          <div class="ENTRA">
                            <div class="foto"><img class="fotus" src="image/pruebas2.jpeg" alt=""></div>
                              <table class="EN-SA">
                                <thead class="EN-SA_thead">
                                  <th class="EN-SA_th">Nro carnet</th>
                                  <th class="EN-SA_th">Entrada</th>
                                  <th class="EN-SA_th">Restante</th>
                                </thead>
                                <tbody class="EN-SA_td">
                                  <td class="EN-SA_td">21</td>
                                  <td class="EN-SA_td">09:05</td>
                                  <td class="EN-SA_td">50min</td>
                                </tbody>
                              </table>
                          </div>
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
@endsection
