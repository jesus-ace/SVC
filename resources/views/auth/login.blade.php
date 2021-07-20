<!--DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--link rel="stylesheet" href="/css/style2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <title>Login</title>
        <script src="js/jquery-1.12.0.js"></script>
    </head>

    <body>
        <div class="container" id="login">
            <div class="row align-items-center h-100">
                <div class="col-10  mx-auto bg-login d-flex justify-content-center px-0">
                    <form method="POST" action="{{ route('login') }}" class="form-login col-12 col-sm-7">
                        {{csrf_field ()}}
                        <h3>Ingreso</h3>
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3 ilogin">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Usuario <i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="us_user" id="us_user" class="form-control" required>
                                    </div>
                                    <div class="input-group mb-3 ilogin">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Password <i class="fas fa-unlock-alt"></i> </span>
                                        </div>
                                        <input type="password" name="us_password" id="us_password" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn ingresar">Ingresar<i class="fas fa-sign-in-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="lateralL d-none d-sm-block col-md-5 px-0">
                        <!--div class="d-flex">
                            <div class="align-items-center h-100">
                                <div class="textoL align-self-center">
                                    <h2>Bienvenido</h2>
                                    <h5>Sistema de control de entrada y salida de visitantes</h5>
                                </div>
                                <!--div class="imagen-fondoL align-self-center w-100">
                                    <i class="fas fa-address-card"></i>
                                </div-->
                            <!--/div-->
                        <!--/div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/ui-bootstrap-tpls-2.5.0.min.js"> </script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>

    </html-->

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
							<div class="mt-4">
								<input class="btn container-fluid fw-bolder btn-color-secondary text-white" type="submit" value="INGRESAR">
							</div>
							<div class="mt-3 text-center">
								<a href="#" class="text-muted">¿Olvidó su contraseña?</a>
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
