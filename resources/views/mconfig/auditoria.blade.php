@extends('layouts.app')

@section('content')
<div class="list-vigilante" id="auditar">
    <h3>Auditor&iacute;a</h3>
    <table>
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
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Acciones</th>
              <th>Maquina</th>
              <th>IP</th>
              <th>Navegador</th>
              <th>Hora</th>
              <th>D&iacute;a</th>
            </thead>
            <tbody>
              <td>fulanito</td>
              <td>fulano</td>
              <td>Ingresar</td>
              <td>0007894</td>
              <td>192.123.12.0</td>
              <td>mozilla firefox</td>
              <td>08:59</td>
              <td>5-11-2020</td>
            </tbody>
    </table>
    <section class="paginacion">
    </section>
</div>
@endsection