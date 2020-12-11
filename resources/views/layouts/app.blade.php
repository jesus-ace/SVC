<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.SCESV', 'SCESV')}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/editor.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style3.css">

    

    <!--iconos-->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!--jquery-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body  onload="mostrarHora();">
    <nav id="navbar">
        <img src="image/logo-minci.jpg" class="navbar-left img-responsive mppci">
        <!--p id="hora" class="horaocl"></p-->
        <div class="navbar-header">
        <a  class="home" href="{{ url('/welcome') }}">
            <img src="image/logo-vive-evoluciona.png" alt="Vive Tv" class="logo-menu">
        </a>
        <div class="enlaces">
            <a id="abrir" class="menu" ><i class="fas fa-bars"></i></a>
        </div>
    </nav>
    <div class="contenedor">
    @yield('content')
    @auth
        <div class="side-bar" id="br-lateral">
            <div class="bar-profile">
                <img src="imagenes/{{ Auth::user()->us_photo }}" alt="Foto de perfil">
            </div>
            <div class="user-name">
                <p> {{ Auth::user()->us_user }}</p>
            </div>
            <div class="dashboard-view">
                <a href="{{ url('/dashboard') }}" class='dashboard-btn'>Dashboard <i class="fas fa-tachometer-alt"></i></a>
            </div>
            <div class="moduloe">
                Estad&iacute;sticas
                <i class="fas fa-chart-area"></i>
                <ul>
                    <li><a id="xareas" class="opc">Por &aacute;reas <i class="fas fa-layer-group"></i></a></li>
                    <li><a href="#" class="opc">General<i class="fas fa-chart-pie"></i></a></li>
                </ul>
            </div>
            <div class="modulor">
                Reportes<i class="far fa-clipboard"></i>
                <ul>
                    <li><a class="no-oculto" id="reporte">Crear Reportes<i class="far fa-plus-square"></i></a></li>
                    <li><a class="no-oculto" id="see-reports">Ver Reportes<i class="fas fa-file-alt"></i></a></li>
                </ul>
            </div>
            <div class=" list">
                Listados<i class="fas fa-list"></i>
                <ul class="ul">
                @if(Auth:: user()->us_rol_id==1)
                    <li><a href="{{ url('/list-vigilante') }}" id="list-vigilant" class="opc">Vigilantes<i class="fas fa-user-shield"></i></a></li>
                    <li><a href="{{ url('/list-visitor') }}" id="list-visitors" class="opc">Visitantes<i class="fas fa-walking"></i></a></li>
                    @else
                    <li><a id="list-visitors" href="{{ url('/list-visitor') }}"  class="opc">Visitantes<i class="fas fa-walking"></i></a></li>
                @endif
                </ul>
            </div>
            <div class="log">
                <a href="{{ url('/new-visitor') }}" class="no-oculto" id="visitante">Agregar Visitante<i class="fas fa-walking"></i></a>
            </div>
            <div class="moduloc">Configuraci&oacute;n<i class="fas fa-cog"></i>
                <ul class="ul">
                @if(Auth:: user()->us_rol_id==1)
                    <li><a id="btnuser" class="opc" href="{{ url('/user-profiel') }}">Usuario<i class="fas fa-user"></i></a></li>
                    <li><a href="{{url('/permits')}}" id="roles" class="opc">Roles <i class="fas fa-users-cog"></i></a></li>
                    <li><a id="audi" href="{{url('/Auditoria')}}" class="opc">Auditor&iacute;a <i class="fas fa-user-tag"></i></a></li>
                    <li><a id="new_user" href="{{ route('register') }}" class="opc" id="new-user">Nuevo usuario <i class="fas fa-user-plus"></i></a></li>
                    @else
                    <li><a href="{{ url('/user-profiel') }}" id="btnuser" class="opc">Usuario<i class="fas fa-user"></i></a></li>
                @endif
                </ul>
            </div>
            <div class=" log">
                <a href="{{ route('logout') }}"  class="log-btn" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                Logout<i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <button id="ocultar" onclick="ocultar();"><span class="material-icons">keyboard_tab</span></button> 
        </div>
        @endauth
    </div>
    <div>
        @yield('modal')
    </div>
    <!-- Scripts -->
    <script src="/js/script.js"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/validaciones.js"></script>
    <!--script src="/js/sweetalert.js"></script-->
    <!--script src="/js/camara.js"></script-->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
