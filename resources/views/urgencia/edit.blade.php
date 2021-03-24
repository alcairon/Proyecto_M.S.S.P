@extends("layouts.appVista") @section("content")

<h1>Editar Urgencia</h1>
<form method="POST" action="{{ route('urgencia.update',$urgencia->id) }}">
	@method('PUT')@csrf
	<div class="form-group">
		<label for="f_entrada">Fecha Entrada: </label>
		<input
			type="date"
			class="form-control"
			name="f_entrada"
			value='{{$urgencia->f_entrada->format("d/m/Y")}}'
		/>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="categoria">Tipo de Urgencia:</label>
		<select class="form-control" id="categoria" name="tipo_urgencia">
			@foreach ($categorias as $categoria)
			<option value="{{$categoria->id}}">{{$categoria->tipo_urgencia}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="tratamiento">Tratamiento:</label>
		<select class="form-control" id="tratamiento" name="tratamiento">
			@foreach ($tratamientos as $tratamiento)
			<option value="{{$tratamiento->id}}">{{$tratamiento->tratamiento}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="paciente">Paciente:</label>
		<select class="form-control" id="paciente" name="paciente">
			@foreach ($pacientes as $paciente)
			<option value="{{$paciente->id}}">{{$paciente->nombre}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="medico">Medcio:</label>
		<select class="form-control" id="medico" name="medico">
			@foreach ($medicos as $medico)
			<option value="{{$medico->id}}">{{$medico->nombre}}</option>
			@endforeach
		</select>
	</div>

	<!--token-->
	<input class="btn btn-info" type="submit" value="Guardar cambios" />
	<a href="/urgencia" class="btn btn-success">Volver al listado </a>
</form>

@endsection