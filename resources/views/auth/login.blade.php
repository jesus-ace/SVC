<DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Login</title>
</head>
<body class="body">

    <div class="container-login" id="login">
        <form method="POST" action="{{ route('login') }}" class="form-login">
            {{csrf_field ()}}
            <h3>Ingreso</h3>
            <div class="inputs">
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Usuario <i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="User_name" id="name" class="form-control" required>
                </div>
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Password <i class="fas fa-unlock-alt"></i> </span> 
                    </div>
                    <input type="password" name="contra" id="name" class="form-control" required>
                </div>
            </div>
            <!--<div class="cambiocontra">-->
                <a id="cambioC" class="cambiocontra">forgot password?</a>
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
    <div class="container-contra" id="div-contra">
        <form  class="form-cambio">
            {{ csrf_field() }}
            <h3 class="titulo-cambio">Cambio de contrase&ntildea</h3>
            <div class="inputs">
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text">C&eacute;dula <i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="User_name" id="name"    display: none; class="form-control" required>
                </div>
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> New Password <i class="fas fa-unlock-alt"></i> </span> 
                    </div>
                    <input type="password" name="contra" id="name" class="form-control" required>
                </div>
                <div class="input-group mb-3 ilogin">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> Verificar Password <i class="fas fa-unlock-alt"></i> </span> 
                    </div>
                    <input type="password" name="contra" class="form-control" required>
                </div>
            </div>
            <button type="submit" class="btn ingresar">Acceptar<i class="fas fa-save"></i></button>
        </form>
        <div class="lateralL">
            <div class="textoL">
                <h2 style="visibility: hidden;">Bienvenido</h2>
                <h5>Sistema de control de entrada y salida de visitantes</h5>
            </div>
            <div class="imagen-fondoL">
                <i class="fas fa-key"></i>
            </div>
        </div>
    </div>
    <a class="roleBack" id="back" onclick="back();"><i class="fas fa-arrow-left"></i></a>
    </div>
    <script>
        var cambiocontra = document.getElementById('cambioC'),
            containerCambio = document.getElementById('div-contra'),
            containerlogin = document.getElementById('login'),
            volver = document.getElementById('back');

            cambiocontra.addEventListener('click', function(){
                containerCambio.classList.add('active');
                containerlogin.classList.add('active');
                volver.classList.add('active');
            });
            function back() {
                containerCambio.classList.remove('active');
                containerlogin.classList.remove('active');
                volver.classList.remove('active');
            }
    </script>

</body>
</html-->