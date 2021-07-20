@extends('layouts.app')
@section('content')
  @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  @endsection
<div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
  <div class="col-auto">
    <div class="row px-5 mb-5 mt-5">
      <div class="col-12">
        <h3>Listado de Visitante</h3>
        <table class="col-12 col-md-12" id="visitor-table">
          <a class="btn regisV" id="btnRV"  href="{{ route('new-visitor') }}" >VISITANTE<i class="fas fa-plus"></i></a>
          <thead>
            <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">C&eacute;dula</th>
              <th scope="col">Telefono</th>
              <th scope="col">Domicilio</th>
              <th scope="col">Responsable</th>
              <th scope="col">Acciones</th>
          </thead>
          
        </table>
      </div>
      
    </div>
  </div>
</div>

<script src="js/datatable/datatables.min.js"></script>
<script src="js/actions/listVisitor.js"></script>
@endsection
@extends('visitor.modalVisitor')
