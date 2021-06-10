@extends('layouts.app')

@section('content')
<style>
    body{
        background: #fff;
    }
</style> 
<div class="user" id="user">
    <div class="head" id="head">
        <h2>Sistema de control de entrada y salida de visitantes</h2>
    </div>
    <div class="photo-profile">
        <img src="imagenes/{{ Auth::user()->us_photo }}" alt="Foto de perfil">
    </div>
    <div class="name-lastname">
        <h4 class="nombre">{{ Auth::user()->us_nombre }} {{ Auth::user()->us_apellido }}</h4>
        <p class="nickname">{{ Auth::user()->us_user }}</p>
    </div>
    <div class="info-user"id="info-user">
        <button class="panel-info pi1" id="pi1">Informaci&oacute; Personal</button > 
        <button class="panel-info" id="pi2">Acciones que realiza</button >
    </div>
    <hr>
    <div class="information" id="information">
        <h4>Nombre : {{ Auth::user()->us_nombre }}</h4>
        <h4>Apellido : {{ Auth::user()->us_apellido }}</h4>
        <h4>C&eacute;dula :{{ Auth::user()->us_cedula }} </h4>
        <h4>Correo : {{ Auth::user()->us_correo }}</h4>
        <h4>User name : {{ Auth::user()->us_user }}</h4>
        <h4>Cargo : this is god</h4>
        <button type="reset" class="btn btn-secondary modificar">Modificar</button>
    </div>
    <div class="acciones" id="acciones">
        <form >
            <h4>Este usuario puede realizar las siguientes acciones:</h4>
                <label >
                    Agregar visitantes
                    <input type="checkbox" checked disabled>
                </label>
                <label >
                    Modificar visitantes
                <input type="checkbox" checked disabled>
                </label>
                <label >
                    Consultar visitantes
                    <input type="checkbox" checked disabled>
                </label>
        </form>
    </div>
</div>
<script src="/js/script-u.js"></script>
@endsection