@extends("layouts.appVista")

@section("content")
<div id=contenedor>

	<div id=title class="card-header">
		<h1>
			Vista del paciente {{$paciente->id}}
		</h1>
	</div>
				
						
		<div id=element>
				Id : {{$paciente->id}}
		</div>	
	
		<div id=element>
				Nombre : {{$paciente->nombre}}
		</div>	
	
		<div id=element>
				Apellido : {{$paciente->apellido}}
		</div>	
	
		<div id=element>
				DNI : {{$paciente->dni}}
		</div>	
	
		<div id=element>
				Teléfono : {{$paciente->telefono}}
		</div>
					
	



<a href = "/paciente" class="btn btn-primary btn-sm">Volver al listado</a>
	
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

	s
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection