<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<!-- Bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<!-- Fontawesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- Google fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Mukta">
        <link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="css/styles_login.css">
	</head>
	<body>
		<div class="m-0 vh-100 row justify-content-center align-items-center">
			<form class="card p-5 tamaño-form bg-image shadow-lg" method="POST" action="{{ route('login') }}">
                {{csrf_field ()}}
				<div class="row">
					<div class="col-12 col-sm-6 col-xs-12">
						<div class="text-center">
							<i class="fas fa-user-circle fa-6x text-color-primary"></i>
						</div>
						<h1 class="fw-bolder text-center text-color-primary mt-2">ACCESO</h1>
						<div class="px-5 mt-4">
							<div class="wrapper">
								<div class="input-data">
									<i class="icon-move fas fa-user-circle fa-lg icon"></i>
									<input type="text" name="us_user" id="us_user" required>
									<div class="underline"></div>
									<label for="usuario" class="text-muted fw-normal">Usuario</label>
								</div>
							</div>
							<div class="wrapper mt-5">
								<div class="input-data">
									<i class="icon-move fas fa-lock fa-lg icon"></i>
									<input type="password" name="us_password" id="us_password" required>
									<div class="underline"></div>
									<label for="contraseña" class="text-muted fw-normal">Contraseña</label>
								</div>
							</div>
							<div class="mt-4 mb-4">
								<input class="btn container-fluid fw-bolder btn-color-secondary text-white" type="submit" value="INGRESAR">
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-xs-12 columna2">
						<div class="text-center logoContainer px-5">
							<img src="image/logoVive.svg" alt="Vive Evoluciona">
							<h2 class="text-white mt-3 h5">Sistema de control de entrada y salida de visitantes</h2>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- Bootstrap 5 Js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="js/script.js"></script>
	</body>
</html>
