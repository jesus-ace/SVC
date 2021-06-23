@extends('layouts.app')
@section('content')
	@section('css')
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
	@endsection
	<div class="row bg-login justify-content-center align-items-center h-100 mx-auto mt-5 px-0">
		<div class="col-auto">
			<div class="row px-5 mb-5 mt-5">
				<div class="col-12">
					<h3>Listado de Usuarios</h3>
					<table class="table table-striped table-bordered" id="usuarios">
						<!--div class="buscador">
							<form>
									<div class="input-group buscador">
											<input type="search"  class="busca" name="buscar" id="buscar" placeholder="Ingrese User Name">
											<span class=" input-group-btn">
													<button type="submit" class="buscar"><i class='fas fa-search'></i></button>
											</span>
									</div>
							</form>
						</div-->
						<a class="btn regisV" id="btnRV"  href="{{route('register')}}" >USUARIOS<i class="fas fa-plus"></i></a>
						<thead>
							<th>id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>C&eacute;dula</th>
							<th>Correo</th>
							<th>User name</th>
							<th>Rol</th>
							<th>Acciones</th>
						</thead>
						<tbody>
							<!--tr>
								
							</tr-->   
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="js/datatable/datatables.min.js"></script>
	<script src="js/actions/listUser.js"></script>
	<!--script src="js/sweetalert.js"></script-->
@endsection
@extends('auth.modalUser')