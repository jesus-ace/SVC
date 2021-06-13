@extends('layouts.app')
@section('content')
  @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  @endsection
  <div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
    <div class="col-auto">
      <div class="row px-5 mb-5 mt-5">
        <div class="col-12">
          <h3>Listado de Usuarios</h3>
          <table class="col-12" id="user-table">
            <!--div class="buscador">
              <form>
                  <div class="input-group buscador">
                      <input type="search"  class="busca" name="buscar" id="buscar" placeholder="Ingrese User Name">
                      <span class=" input-group-btn">
                          <button type="submit" class="buscar"><i class='fas fa-search'></i></button>
                      </span>
                  </div>
              </form>
            </div-->
            <a class="btn regisV" id="btnRV"  href="{{route('register')}}" >USUARIOS<i class="fas fa-plus"></i></a>
            <thead>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>C&eacute;dula</th>
              <th>Correo</th>
              <th>User name</th>
              <th>Rol</th>
              <th>Acciones</th>
            </thead>
            <tbody>
              <tr>
                
              </tr>   
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready( function () {
      $('#user-table').DataTable({
        'serverSide':true,
        "ajax": "{{ url('api/list_user')}}",
        "columns":[
          {data:"us_id"},
          {data:"us_nombre"},
          {data:"us_apellido"},
          {data:"us_cedula"},
          {data:"us_user"},
          {data:"us_correo"},
          {data:"us_id_rol"},
        ]
      });
    });
  </script>
<!---script>
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
</script-->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
@endsection