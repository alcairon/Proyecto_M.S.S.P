@extends("layouts.appVista")

@section("content")

<h1>
	Nueva Paciente
<!--<img class=" width=841.89px height=595.28px " src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>-->
</h1>
<form   method="POST" class="form-horizontal" action="{{url('/paciente')}}">
	<!--<input type="hidden" name="_method" value="POST">-->
@csrf
	<div class="form-group">
	  <label class="control-label col-sm-2" for="id">Id:</label>
	  <div class="col-sm-10">
		<input type="text" class="form-control" id="id" placeholder="id" name="id">
	  </div>
	</div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nombre">Nombre:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="apellido">Apellido:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="dni">Dni:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dni" placeholder="dni" name="dni">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono">
      </div>
    </div>
	
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Guardar</button>
      </div>
    </div>

  </form>

<a href="/paciente" class="btn btn-success">Volver al listado </a>

<style>
	

		
	
	body{
		background-color:lightblue;
	}
	
	img{
		width:150px;
		height:150px;
		
	}
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>

@endsection