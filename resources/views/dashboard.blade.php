@extends('layouts.sidebar')
@section('content')

<h1 class="text-color-primary fw-bold ms-5">Ingreso por departamentos</h1>
<section class="container-fluid">
	<div class="row">
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
		<div class="col mt-1 mx-4">
			<div class="card py-4 shadow-lg">
				<h6 class="fs-3 fw-bold text-center">Departamento A</h6>
				<div class="container text-center mt-2">
					<p class="fs-3 persons fw-bold text-start ms-5">1517<strong class="text-muted fw-light "> personas</strong></p>
					<strong class="fs-4 text-color-secondary total">Total</strong>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <div id="chart">
</div> --}}
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