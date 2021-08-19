@extends('layouts.sidebar')
@section('content')
<main class="px-5">
	
	<section class="container-fluid">
		<h1 class="text-color-primary fw-bold ms-5">Ingreso por departamentos</h1>
		<div class="row mt-4">
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col mt-1 mx-4">
				<div class="card py-4 shadow-lg">
					<div class="container text-center mt-2">
						<div class="row">
							<div class="col-4">
								<div>
									<i class="far fa-building fa-4x text-color-primary"></i>
								</div>
							</div>
							<div class="col">
								<p class="text-end fw-bold fs-3">1517</p>
								<p class="fw-light text-color-secondary fs-5 text-end">Departamento A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid mt-5">
		<h1 class="fw-bold text-color-primary ms-5">Información general</h1>
		<div class="row mx-3">
			<div class="col-1"></div>
			<div class="col-md-5 col-sm-5 col-xs-12 col-12 card shadow-lg mt-2 mx-4">
				<h3 class="fw-bold ms-4 mt-4">Acceso por área</h3>
				<div id="chart">
				</div>
			</div>
			
			<div class="col-md-5 col-sm-5 col-xs-12 col-12 card shadow-lg mt-2 mx-4">
				<h3 class="fw-bold ms-4 mt-4">Últimos Accesos</h3>
				<div class="row bg-light-main p-3 m-1 rounded">
					<div class="col-md-4 col-12 text-center bg-light rounded">
						<img src="img/prueba.png" width="125" height="125" alt="user-card">
					</div>
					<div class="col-md-8 col-xs-12 col-12 ">
						<h4 class="text-center fw-bold">Nombre</h4>
						<ul>
							<li>Hora Entrada:</li>
							<li>Hora Salida:</li>
						</ul>
					</div>
				</div>
				<div class="row bg-light-main p-3 mt-3 m-1 rounded">
					<div class="col-md-4 col-xs-12 col-12 text-center bg-light rounded">
						<img src="img/prueba.png" width="125" height="125" alt="user-card">
					</div>
					<div class="col-md-8 col-xs-12 col-12 ">
						<h4 class="text-center fw-bold">Nombre</h4>
						<ul>
							<li>Hora Entrada:</li>
							<li>Hora Salida:</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-1"></div>
		</div>
	</section>
</main>
<script src="js/apexcharts.js"></script>
<script>
var options = {
chart: {
type: 'bar'
},
series: [{
name: 'sales',
data: [200,40,45,50,49,60,70,91,125]
}],
xaxis: {
categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
}
}
var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
var options = {
series: [{
name: 'series1',
data: [31, 40, 28, 51, 42, 109, 100]
}, {
name: 'series2',
data: [11, 32, 45, 32, 34, 52, 41]
}],
chart: {
height: 350,
type: 'area'
},
dataLabels: {
enabled: false
},
stroke: {
curve: 'smooth'
},
xaxis: {
type: 'datetime',
categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
x: {
format: 'dd/MM/yy HH:mm'
},
},
};
var chart = new ApexCharts(document.querySelector("#lineChart"), options);
chart.render();
</script>
@endsection