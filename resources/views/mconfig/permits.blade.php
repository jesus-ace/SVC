@extends('layouts.app')

@section('content')
<div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
    <div class="col-auto">
        <h1 style="margin-top:20px">Agregar Permisos a usuarios</h1>
        <form action="" class="search-user-role">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingrese cedula del usuario a buscar">
                <div class="input-group-append">
                    <button class="btn buscar" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="col-auto">
            <div class="row d-md-flex mb-5">
                <div class="col-6">
                    <div class="datos-user">
                        <div class="photo-us">
                            <img src="image/prueba3.jpg" alt="">
                            <span class="name-user"><h3>Fulanito Fulano</h3></span>
                        </div>
                    </div>
                    <div class="input-group info-rol">
                        <div class="input-group-prepend">
                            <div class="input-group-text" id="btnGroupAddon">C&eacute;dula</div>
                        </div>
                        <input type="text" class="form-control" value="12345678" disabled>
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
                <div class="col-6">
                    <h3>Permisos</h3>
                    <form action="">
                        <div class="col-xs-3">
                            <label class="tasks-list-item">
                                <input type="checkbox" rel="chkequipo" id="check_incluir" name="chkequipo_{num_id}" data="{num_id}" value="" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">Insertar</span>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="tasks-list-item">
                                <input type="checkbox" rel="chkequipo" id="check_incluir" name="chkequipo_{num_id}" data="{num_id}" value="" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">Modificar</span>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="tasks-list-item">
                                <input type="checkbox" rel="chkequipo" id="check_incluir" name="chkequipo_{num_id}" data="{num_id}" value="" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">Buscar</span>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="tasks-list-item">
                                <input type="checkbox" rel="chkequipo" id="check_incluir" name="chkequipo_{num_id}" data="{num_id}" value="" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">Imprimir</span>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="tasks-list-item">
                                <input type="checkbox" rel="chkequipo" id="check_incluir" name="chkequipo_{num_id}" data="{num_id}" value="" class="tasks-list-cb">
                                <span class="tasks-list-mark"></span>
                                <span class="tasks-list-desc">Eliminar</span>
                            </label>
                        </div>
                        <button class= "btn RER col-4" >Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection