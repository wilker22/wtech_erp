<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Sistema ERP - mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">		
		<!--css-->
		
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"">
		<link rel="stylesheet" href="{{asset('assets/js/datatables/css/jquery.dataTables.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/js/datatables/css/responsive.dataTables.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/DataTables_boot.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/auxiliar.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/grade.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	
<body>

    @include("cabecalho")

	@include("menu")

<div class="rows mx-0">

    @yield('conteudo')
	
	
	
	
</div>
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('assets/js/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/js/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.form.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mask.js')}}"></script>
	<script src="{{asset('assets/js/js.js')}}"></script>
	
	
	<!-- Graphs -->
    <script src="{{asset('assets/js/chart.js/Chart.min.js')}}"></script>
	<script src="{{ asset ('assets/js/grafico.js') }}"></script>
	<script src="{{asset('assets/js/funcao.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
	  $( function() {
		$( "#tab" ).tabs();
	  } );
  </script>
</body>
	
</html>