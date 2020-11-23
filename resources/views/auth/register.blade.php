@extends('layouts.app')

@section('content')
<div class="container-login1" id="FormR">
            <form method="POST" action="{{ route('register') }}" class="form-registroV">
            {{ csrf_field() }}
                <h3>Registro de vigilantes</h3>
                <div class="inputs">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Nombres</span>
                        </div>
                        <input type="text" name="us_nombre"  class="form-control" required>
                    </div>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Apellidos</span> 
                        </div>
                        <input type="text" name="us_apellido" class="form-control" required>
                    </div>
                    <div class="input-group mb-3 ilogin">
                        <div class="input-group-prepend">
                          <span class="input-group-text">C&eacute;dula</span> 
                        </div>
                        <input type="text" name="us_cedula" class="form-control" required>
                    </div>
                    <div class="input-group mb-3 ilogin">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Correo</span> 
                        </div>
                        <input type="text" name="us_correo"  class="form-control" required>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group mb-3 ilogin">
                        <div class="input-group-prepend">
                          <span class="input-group-text">User Name</span> 
                        </div>
                        <input type="text" name="us_user"  class="form-control" required>
                    </div>
                    <div class="input-group mb-3 ilogin">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Password</span> 
                      </div>
                      <input type="password" name="us_password" class="form-control" required>
                  </div>
                </div>
                <button type="submit" class="btn ingresar">Registrar<i class="fas fa-save"></i></button>
            </form>
            <div class="lateral">
                <div class="texto">
                    <img src="image/logo-vive-evoluciona.png" alt="Vive Tv" class="logo-menu">
                    <h5>Sistema de control de entrada y salida de visitantes</h5>
                </div>
                <div class="imagen-fondo">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
        <script src="/js/dashboard.js"></script>
@endsection
