@extends("layouts.appVista")

@section("content")
<div id=contenedor>

	<div id=title class="card-header">
		
		<h1>
			Vista del médico {{$medico->id}}
		</h1>
	</div>
				
		<div id=element>
				Id : {{$medico->id}}
		</div>	
	
		<div id=element>
				Nombre : {{$medico->nombre}}
		</div>	
	
		<div id=element>
				Apellido : {{$medico->apellido}}
		</div>	
	
		<div id=element>
				DNI : {{$medico->dni}}
		</div>	
	
		<div id=element>
				Teléfono : {{$medico->telefono}}
		</div>	
				



<a href = "/medico" class="btn btn-primary btn-sm">Volver al listado</a>
	
</div>
<style>
	

	#palabra{
		margin:25%;
		font-weight: bold;
	}
	
	#title{
		
		font-family: sans-serif;
		font-style: italic;
		font-weight: bold;
		background-color:white;
		
		border-width:1px;
		border-color:black;
	}
	#element{
		margin-bottom:8px;
		margin-top:8px;
		background-color:white;
		font-size:30px;
		font-weight: bold;
		padding-left:20px;
	}
	table{
		background-color:white;
		width:100%;
	}

	
	#contenedor{
		padding-left:15%;
		margin-right:14%;
		padding-top:1%;
	}

	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection