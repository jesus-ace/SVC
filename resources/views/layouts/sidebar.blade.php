<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.SCESV', 'SCESV')}}</title>
		<!-- Bootstrap 5 -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Fontawesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- Google fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Mukta">
		<!-- Local styles -->
		<link rel="stylesheet" href="css/styles_menu.css">
	</head>
	<body>
		<div class="navbar bg-primary-main sticky-top">
			<div class="float-start">
				<li class="nav-item btn ms-3" id="menu-btn">
					<i class="fas fa-bars fa-2x text-white"></i>
				</li>
			</div>
			<div class="float-end">
				<div class="dropdown me-3">
					<button type="button" class="btn dropdown-toggle text-white" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
					Configuración
					</button>
					<ul class="dropdown-menu mt-2 without-border shadow" aria-labelledby="dropdownMenuOffset">
						{{-- @if(Auth:: user()->us_rol_id==1) --}}
						<li>
							<a class="dropdown-item" href="{{ url('/user-profiel') }}">
								<i class="fas fa-user mx-2"></i>Usuario
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="{{url('/permits')}}">
								<i class="fas fa-users-cog mx-2"></i>Roles
							</a>
						</li>
						<li>
							<a href="{{url('/Auditoria')}}" class="dropdown-item">
								<i class="fas fa-user-tag mx-2"></i>Auditoria
							</a>
						</li>
						<li>
							<!-- Falta este -->
							<a class="dropdown-item" href="#">
								<i class="fas fa-cog mx-2"></i>Configuración</a>
						</li>
						<li>
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="fas fa-sign-out-alt mx-2"></i>Cerrar Sesión</a>
							<form action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
						{{-- @endif --}}
					</ul>
				</div>
			</div>
		</div>
		<nav class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
			<div id="accordionExample">
				<div class="my-2 container" id="brand">
					<div class="container text-center">
						<img src="img/logoVive.svg" width="100" height="100" alt="">
					</div>
				</div>
				<div class="nav-item mt-4 mb-2">
					<a href="{{ url('/dashboard') }}" class="text-white fs-6 nav-link list d-flex">
						<i class="fas fa-tachometer-alt fa-lg mx-2" ></i>
						<p class="text-hidden">Dashboard</p>
					</a>
				</div>
				<div class="nav-item mt-4 mb-2">
					<a href="{{ url('/new-visitor') }}" class="text-white fs-6 nav-link list d-flex">
						<i class="fas fa-user-plus fa-lg mx-2" ></i>
						<p class="text-hidden">Agregar</p>
					</a>
				</div>
				<div class="nav-item mt-4 mb-2 dropend">
					<a href="#" class="text-white fs-6 nav-link list d-flex " data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-chart-line fa-lg mx-2" ></i>
						<p class="text-hidden">Estadísticas</p>
					</a>
					<ul class="dropdown-menu without-border z-index shadow">
						<a class="dropdown-item" href="#">Por Áreas</a>
						<a class="dropdown-item" href="#">General</a>
					</ul>
				</div>
				<div class="nav-item mt-4 mb-2 dropend">
					<a href="#" class="text-white fs-6 nav-link list d-flex " data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-bullhorn fa-lg mx-2" ></i>
						<p class="text-hidden">Reportes</p>
					</a>
					<ul class="dropdown-menu without-border z-index shadow">
						<a class="dropdown-item" href="#">Crear Reportes</a>
						<a class="dropdown-item" href="#">Ver Reportes</a>
					</ul>
				</div>
				<div class="nav-item mt-4 mb-2 dropend">
					<a href="#" class="text-white fs-6 nav-link list d-flex " data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-list fa-lg mx-2" ></i>
						<p class="text-hidden">Listados</p>
					</a>
					<ul class="dropdown-menu without-border z-index shadow">
						{{-- @if(Auth:: user()->us_rol_id==1) --}}
						<a class="dropdown-item" href="{{ url('/ListUser') }}">Usuarios</a>
						<a class="dropdown-item" href="{{ url('/list-visitor') }}">Visitantes</a>
						{{-- @endif --}}
					</ul>
				</div>
			</div>
		</nav>
		<!-- Contenido del menu principal -->
		<div class="p-1 my-container active-cont active-cont-movil">
			<div class="m-0 vh-100 row justify-content-center align-items-center">
				<div class="card p-2 tamaño-form shadow-lg">
					@yield('content')
					{{-- @auth --}}
				</div>
			</div>
		</div>
	</body>
	<!-- Bootstrap 5 Js -->
	<script src="js/bootstrap.bundle.min.js"></script>
	@yield('js')
	<script src="{{ asset('js/script.js') }}"></script>
</html>