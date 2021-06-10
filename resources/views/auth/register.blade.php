@extends('layouts.app')

@section('content')

<div class="row justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
  <div class="col-12 justify-content-center bg-login">
    <div class=" row d-flex justify-content-around ">
      <form method="POST" action="{{ route('register') }}" class="form-registroV col-12 col-sm-7 align-items-center h-100 ">
        <h3>Registro de Usuarios</h3>
        <div class="container ">
          <div class="row px-0 ">
            <div class="col-12 px-0">
                {{ csrf_field() }}
                <input type="hidden" name="us_estatus" class="form-control" value="1" required>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombres</span>
                  </div>
                  <input type="text" name="us_nombre" class="form-control" value="{{ old('us_nombre') }}" required
                    onkeypress="return sololetras(event)">
                </div>
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Apellidos</span>
                  </div>
                  <input type="text" name="us_apellido" class="form-control" value="{{ old('us_apellido') }}" required
                    onkeypress="return sololetras(event)">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">C&eacute;dula</span>
                  </div>
                  <input type="text" name="us_cedula" class="form-control" value="{{ old('us_cedula') }}" maxlength="9" required
                    onkeypress="return solonumeros(event)">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">User Name</span>
                  </div>
                  <input type="text" name="us_user" class="form-control" value="{{ old('us_user') }}" required
                    onkeypress="return sololetras(event)">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Correo</span>
                  </div>
                  <input type="text" name="us_correo" class="form-control" value="{{ old('us_correo') }}">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Password</span>
                  </div>
                  <input type="password" name="us_password" class="form-control" required>
                </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn ingresar mb-3">Registrar<i class="fas fa-save"></i></button>
      </form>
      <div class="lateral d-none d-sm-block col-sm-5">
        <div class="texto col-12">
          <img src="image/logo-vive-evoluciona.png" alt="Vive Tv" class="logo-menu">
          <h5>Sistema de control de entrada y salida de visitantes</h5>
        </div>
        <div class="imagen-fondo col-12">
          <i class="fas fa-users col-12 "></i>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/js/validaciones.js"></script>
<script src="/js/dashboard.js"></script>
@endsection
