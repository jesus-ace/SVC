@extends('layouts.sidebar')
@section('content')

<div id="chart">
</div>

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