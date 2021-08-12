@extends('layouts.sidebar')
@section('content')
<main class="px-5">
	
	<section class="container-fluid">
		<h1 class="text-color-primary fw-bold ms-5">Ingreso por departamentos</h1>
		<div class="row">
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
		<div class="container">
			<div class="row">
				<div class="col card shadow-lg mx-3">
					<div id="chart">
					</div>
				</div>
				<div class="col card shadow-lg mx-3">
					
				</div>
			</div>
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
</script>
@endsection