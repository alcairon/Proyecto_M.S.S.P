
@extends('layouts.app')

@section('content')
<div class="container" id ="container">
    <div class="row justify-content-center">

		<img class="inicioUrgencia" src='img/InicioSitioWeb.png'>
		

    </div>
</div>


<style>
	.logout {
		padding-right:10px;
		text-align:right;
		font-weight: bold;
		
	}

	

	body{
		background-color:lightblue;
	}
	
	.inicioUrgencia{
		width:90%;
		height: auto;
 
	}
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection
