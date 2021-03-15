@extends("layouts.app2")

@section("content")
<div id=contenedor>

	<div id=title class="card-header">
		<h1>
			Vista del paciente {{$paciente->id}}
				<img class=" width=841.89px height=595.28px " src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>
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
	img{
		width:120px;
		height:120px;
		
	}
	

	#contenedor{
		padding-left:20%;
		
		padding-top:10%;
		
		padding-right:20%;
	}
	
	
	body{
		background-color:lightblue;
	}
	
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection