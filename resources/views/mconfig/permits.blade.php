@extends('layouts.app')

@section('content')
<div class="permisos" id="permits">
    <h1 style="margin-top:20px">Agregar Permisos a usuarios</h1>
    <form action="" class="search-user-role">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingrese cedula del usuario a buscar">
            <div class="input-group-append">
                <button class="btn buscar" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <div class="permis-contec">
        <div class="datos-user">
            <div class="photo-us">
                <img src="image/prueba3.jpg" alt="">
                <span class="name-user"><h3>Fulanito Fulano</h3></span>
        </div>
        <div class="input-group info-rol">
            <div class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon">C&eacute;dula</div>
            </div>
            <input type="text" class="form-control" value="27647120" disabled>
        </div>
        <div class="input-group info-rol">
            <div class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon">Cargo</div>
            </div>
            <input type="text" class="form-control" value="Vigilante" disabled>
        </div>
        <div class="input-group info-rol">
            <div class="input-group-prepend">
                <div class="input-group-text" id="btnGroupAddon">Rol</div>
            </div>
            <select class="form-control custom-select select" disabled>
                <option value="admin">Administrador</option>
                <option value="empleado">Empleado</option>
                <option value="seguridad">Seguridad</option>
                </select>
        </div>
    </div>
    <div class="permisos-user">
        <h3>Permisos</h3>
        <form action="">
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1" checked disabled>
                <label class="form-check-label" for="exampleRadios1">Insertar</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2" disabled>
                <label class="form-check-label" for="exampleRadios2">Modificar</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">Eliminar</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">Buscar</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">Imprimir</label>
            </div>
        </form>
        <button class= "RER btn">Modificar</button>
    </div>
    </div>
</div>
@endsection