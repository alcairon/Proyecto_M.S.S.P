
@extends('layouts.appHome')

@section('content')
<!-- <div class="container" id ="container">
    <div class="justify-content-center"> -->

		<!-- <img class="inicioUrgencia" src='img/InicioSitioWeb.png'> -->

<div class="granContenedor">
	<h1 id="titulo">
		Próximas Urgencias
	</h1>

	<table id="tabla_urgencias" class="table table-bordered table-striped" style="width: 100%;">
		<thead>
			<tr>
				<th hidden></th>

				<th>Id</th>

				<th>Fecha Entrada</th>

				<th>Tipo Urgencia</th>

				<th>Tratamiento</th>

				<th>Paciente</th>

				<th>Medico</th>
				
				<th>Estado</th>

				<th>Ver</th>

			</tr>
		</thead>

		<tbody>
			@foreach ($urgenciaEspera as $urgencia)

			<tr>
				<td hidden></td>

				<td>{{$urgencia->id}}</td>

				<td>{{$urgencia->f_entrada->format("d/m/Y")}}</td>

				<td>{{$urgencia->categoria->tipo_urgencia}}</td>

				<td>{{$urgencia->trat->tratamiento}}</td>

				<td>{{$urgencia ->pacient->nombre}}</td>

				<td>{{$urgencia->doctor->nombre}}</td>
				
				<th>{{$urgencia->estado}}</th>

				<td style="text-align: center; vertical-align: middle;">
					<a
						data-id="{{$urgencia->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalShow_{{$urgencia->id}}"
						><button type="button" class="btn btn-show">
							<i class="material-icons dp48">remove_red_eye</i>
						</button>
					</a>
				</td>
				<!-- Modal Show-->
				<div
					class="modal fade"
					id="myModalShow_{{$urgencia->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Urgencia {{$urgencia->id}}
								</h5>

								<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label"
											>Id:{{$urgencia->id}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>F_Entrada:{{$urgencia->f_entrada->format("d/m/Y")}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Tipo
											Urgencia:{{$urgencia->categoria->tipo_urgencia}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Tratamiento:{{$urgencia->trat->tratamiento}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Paciente: {{$urgencia ->pacient->nombre}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Doctor: {{$urgencia->doctor->nombre}}</label
										>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button
									type="button"
									id="botonCerrar"
									class="btn btn-secondary"
									data-dismiss="modal"
								>
									Cerrar
								</button>
							</div>
						</div>
					</div>
				</div>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function () {
		var t = $('#tabla_urgencias').DataTable({
			responsive: true,
			language: {
				url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json',
			},
		});
		t.on('order.dt search.dt', function () {
			t.column(0, { search: 'applied', order: 'applied' })
				.nodes()
				.each(function (cell, i) {
					cell.innerHTML = i + 1;
				});
		}).draw();
	});
</script>

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
		margin-top:15%;
		z-index: 2000;
	}
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection
