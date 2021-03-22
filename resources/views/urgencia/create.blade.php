@extends("layouts.app2")

@section("content")

<h1>
	Nueva Urgencia
	
</h1>
<form   method="POST" class="form-horizontal" action="{{url('/urgencia')}}">
	<!--<input type="hidden" name="_method" value="POST">-->
@csrf
	

	<div class="form-group">
      <label class="control-label col-sm-2" for="element">Fecha Entrada:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="f_entrada" placeholder="f_entrada" name="f_entrada" style="width: 970px;">
      </div>
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
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Guardar</button>
      </div>
    </div>

  </form>

<a href="/urgencia" class="btn btn-success">Volver al listado </a>

<style>
	

		
	

	
	img{
		width:150px;
		height:150px;
		
	}
	#control-label col-sm-2{
		width:970px;
	}
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>

@endsection

