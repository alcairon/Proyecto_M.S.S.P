@extends("layouts.app2")

@section("content")


	
	<h1>Editar Urgencia</h1>
	<form method="POST" action="{{ url('urgencia/'.$urgencia->id)}}">
		@method('PUT')
		  <div class="form-group">
			<label for="id">Id: </label>
			<input type="text" class="form-control" name="id" value='{{$urgencia->id}}' >
		  </div>
		
		<div class="form-group">
			<label for="matricula">Fecha Entrada: </label>
			<input type="text" class="form-control" name="f_entrada" value='{{$urgencia->f_entrada->format("d/m/Y")}}' >
		  </div>
		<div class="form-group">
			<label for="tipo_urgencia">Tipo Urgencia: </label>
			<input type="text" class="form-control" name="tipo_urgencia" value='{{$urgencia->tipo_urgencia}}' >
		  </div>
		<div class="form-group">
			<label for="tratamiento">Tratamiento: </label>
			<input type="text" class="form-control" name="tratamiento" value='{{$urgencia->tratamiento}}' >
		  </div>
		<div class="form-group">
			<label for="id_paciente">Id Paciente: </label>
			<input type="text" class="form-control" name="id_paciente" value='{{$urgencia->id_paciente}}' >
		  </div>



		
		@csrf 																													 <!--token-->
		<input class="btn btn-info" type="submit" value="Guardar cambios">
	</form>

<a href="/urgencia" class="btn btn-success">Volver al listado </a>


@endsection