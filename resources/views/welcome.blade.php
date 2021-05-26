@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="bienvenida" id="welcome">
        <img class="imagen-bienvenida" src="/image/logo-vive-evoluciona.png" alt="vive_evoluciona">
        <div class="texto-bienvenida">
=======
<div class="row px-0 mx-auto">
    <div class="bienvenida col-12 mt-5" id="welcome">
        <div class="row m-0 justify-content-center">
            <div class="col-sm-auto px-0 mx-0 mt-5">
                <img class="d-none d-sm-block" src="image/logo-vive-evoluciona.png" alt="vive_evoluciona">
                <img class="d-block d-sm-none px-0 mx-0" src="image/viveEvoluciona263x80.png" alt="vive_evoluciona">
            </div>
        </div>
        <div class="col-auto px-0 mx-0 mt-5 mb-5 ml-5 mr-5">
>>>>>>> version-developer-1.23
            <h1>Bienvenido {{ Auth::user()->us_nombre }}</h1>
            <h3><span id="hora1"></span></h3>
        </div>
    </div>
<<<<<<< HEAD
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
=======
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
>>>>>>> version-developer-1.23
@endsection
