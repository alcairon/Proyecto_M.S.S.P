
@extends('layouts.appHome')

@section('content')
<div class="container" id ="container">
    <div class="justify-content-center">

		<img class="inicioUrgencia" src='img/InicioSitioWeb.png'>
		

    </div>
</div>


<style>
	.logout {
		padding-right:10px;
		font-weight: bold;
		
	}

	

	body{
		background-color:lightblue;
	}
	
	.inicioUrgencia{
		width:75%;
		height: auto;
 		margin-left:10%;
	}
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection
