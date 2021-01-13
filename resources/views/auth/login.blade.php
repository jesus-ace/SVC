<DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--link rel="stylesheet" href="/css/style2.css"-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Login</title>
</head>
<body class="body" style="background-image: url(image/fondocopia.jpg);-webkit-background-size: cover; -moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="container-login" id="login">
        <form method="POST" action="{{ route('login') }}" class="form-login">
            {{csrf_field ()}}
            <h3>Ingreso</h3>
            <div class="inputs">
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Usuario <i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="us_user" id="us_user" class="form-control" required>
                </div>
                @if($errors -> has('us_user'))
                    <span class="help-block">
                        <strong>{{$errors -> first('us_user')}}</strong>
                    </span>
                @endif
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Password <i class="fas fa-unlock-alt"></i> </span> 
                    </div>
                    <input type="password" name="us_password" id="us_password" class="form-control" required>
                </div>
                @if($errors -> has('us_password'))
                    <span class="help-block">
                        <strong>{{$errors -> first('us_password')}}</strong>
                    </span>
                @endif
            </div>
            <button type="submit" class="btn ingresar">Ingresar<i class="fas fa-sign-in-alt"></i></button>
        </form>
        <div class="lateralL">
            <div class="textoL">
                <h2>Bienvenido</h2>
                <h5>Sistema de control de entrada y salida de visitantes</h5>
            </div>
            <div class="imagen-fondoL">
                <i class="fas fa-address-card"></i>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>