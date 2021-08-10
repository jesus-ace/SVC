@extends('layouts.sidebar')

@section('content')
<style>
    body{
        background: #fff;
    }
</style> 
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
          
            <figure>
              <div class="ENTRA row">
                <div class="foto col-2">
                    <a href="#thumb" class="thumbnail">
                      <img class="fotus" src="imagenes/"  width="60px" height="60px" style="border-radius: 10px 2px 10px 2px; top:-5px;">
                      <span>
                        <img src="imagenes/" width="180px" height="160px">
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
                      <td class="EN-SA_td"></td>
                      <td class="EN-SA_td"></td>
                    </tbody>
                  </table>
                </div>
              </div>
              <figcaption class="more-info-entry">
                <strong>Nombre y Apellido:</strong> <br>
                <strong>Departamento de Ingreso:</strong> <br>
                <strong>Responsable:</strong> 
              </figcaption>
            </figure>                    
          
        </div>
        <div class="salir col-6">
          <h3>Salida</h3>
          
            <figure>
              <div class="SALI row">
                <div class="foto col-2">
                  <a href="#thumb" class="thumbnail">
                    <img class="fotus" src="imagenes/"  width="60px" height="60px" style="border-radius: 10px 2px 10px 2px; top:-5px;">
                    <span><img src="imagenes/" width="180px" height="160px"></span>
                  </a>    
                </div>
                <div class="col-8">
                  <table class="EN-SA">
                    <thead class="EN-SA_thead">
                      <th class="EN-SA_th">Nro carnet</th>
                      <th class="EN-SA_th"> Hora Salida</th>
                    </thead>
                    <tbody class="EN-SA_td">
                      <td class="EN-SA_td"></td>
                      <td class="EN-SA_td"></td>
                    </tbody>
                  </table>
                </div>
              </div>
              <figcaption class="more-info-exit">
                <strong>Nombre y Apellido:</strong> <br>
                <strong>Departamento de Ingreso:</strong>  <br>
                <strong>Responsable:</strong> 
              </figcaption>
            </figure>
          
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
@endsection
