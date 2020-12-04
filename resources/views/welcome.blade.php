@extends('layouts.app')

@section('content')
    <div class="bienvenida" id="welcome">
        <img class="imagen-bienvenida" src="/image/logo-vive-evoluciona.png" alt="vive_evoluciona">
        <div class="texto-bienvenida">
            <h1>Bienvenido {{ Auth::user()->us_nombre }}</h1>
            <h3><span id="hora1"></span></h3>
        </div>
    </div>
    <script>
        function mostrarHora() {
            var fecha = new Date()
            var hora = fecha.getHours(); 
            var minutos = fecha.getMinutes();
            var segundos= fecha.getSeconds();
            //document.getElementById('hora').innerHTML = hora +":" + minutos +":"+ segundos;
            document.getElementById('hora1').innerHTML = hora +":" + minutos +":"+ segundos;
            setTimeout("mostrarHora()",1000) 
        }
    </script>
@endsection
