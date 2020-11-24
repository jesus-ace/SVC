@extends('layouts.app')

@section('content')
    <div class="bienvenida" id="welcome">
        <img class="imagen-bienvenida" src="/image/logo-vive-evoluciona.png" alt="vive_evoluciona">
        <div class="texto-bienvenida">
            <h1>Bienvenido {{ Auth::user()->us_nombre }}</h1>
            <h3><span id="hora1"></span></h3>
        </div>
    </div>
@endsection
