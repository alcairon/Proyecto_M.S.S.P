@extends("layouts.app2") @section("content")
<div class="granContenedor">
	<h1 id="titulo">
		Listado De Urgencias
	</h1>

	<a
		href="/urgencia/create"
		class="btn btn-success btn-sm"
		id="new"
		class="ver"
		data-toggle="modal"
		data-target="#myModalCrear"
		>Crear</a
	>

	<!-- Modal Crear -->
	<div
		class="modal fade"
		id="myModalCrear"
		tabindex="-1"
		role="dialog"
		aria-labelledby="exampleModalLabel"
		aria-hidden="true"
	>
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						Crear Urgencia
					</h5>

					<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
				</div>
				<div class="modal-body">
					<form method="POST" class="form-horizontal" action="{{url('/urgencia')}}">
						<!--<input type="hidden" name="_method" value="POST">-->
						@csrf

						<div class="form-group">
							<label for="f_entrada">Fecha Entrada:</label>

							<input type="date" class="form-control" name="f_entrada" />
						</div>

						<div class="form-group">
							<label class="control-label" for="categoria">Tipo de Urgencia:</label>
							<select class="form-control" id="categoria" name="tipo_urgencia">
								@foreach ($categorias as $categoria)
								<option value="{{$categoria->id}}"
									>{{$categoria->tipo_urgencia}}</option
								>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label class="control-label" for="tratamiento">Tratamiento:</label>
							<select class="form-control" id="tratamiento" name="tratamiento">
								@foreach ($tratamientos as $tratamiento)
								<option value="{{$tratamiento->id}}"
									>{{$tratamiento->tratamiento}}</option
								>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label class="control-label" for="paciente">Paciente:</label>
							<select class="form-control" id="paciente" name="paciente">
								@foreach ($pacientes as $paciente)
								<option value="{{$paciente->id}}">{{$paciente->nombre}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label class="control-label" for="medico">Medcio:</label>
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
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<a href="/paciente/create" class="btn btn-success btn-sm"
									>Crear Paciente</a
								>
							</div>
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

	<!-------------------->

	<table id="tabla_urgencias" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th hidden>Id</th>

				<th>Id</th>

				<th>Fecha Entrada</th>

				<th>Tipo Urgencia</th>

				<th>Tratamiento</th>

				<th>Paciente</th>

				<th>Medico</th>

				<th>ver</th>

				<th>Editar</th>

				<th>Borrar</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($urgencia as $urgencia)

			<tr>
				<td hidden>{{$urgencia->id}}</td>

				<td>{{$urgencia->id}}</td>

				<td>{{$urgencia->f_entrada->format("d/m/Y")}}</td>

				<td>{{$urgencia->categoria->tipo_urgencia}}</td>

				<td>{{$urgencia->trat->tratamiento}}</td>

				<td>{{$urgencia ->pacient->nombre}}</td>

				<td>{{$urgencia->doctor->nombre}}</td>

				<td>
					<a
						data-id="{{$urgencia->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalShow_{{$urgencia->id}}"
						><button type="button" class="btn btn-secondary">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="16"
								height="16"
								fill="currentColor"
								class="bi bi-eye-fill"
								viewBox="0 0 16 16"
							>
								<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
								<path
									d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"
								></path>
							</svg>
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

				<!-------------------->
				<td>
					<a
						data-id="{{$urgencia->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalEdit_{{$urgencia->id}}"
						><button type="button" class="btn btn-secondary" id="botonCentrar">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="16"
								height="16"
								fill="currentColor"
								class="bi bi-pencil-square"
								viewBox="0 0 16 16"
							>
								<path
									d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
								></path>
								<path
									fill-rule="evenodd"
									d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
								></path>
							</svg></button
					></a>
					<!--<a href="/urgencia/{{$urgencia->id}}/edit" class="btn btn-success btn-sm">Editar</a>-->
				</td>

				<!-- Modal Edit -->
				<div
					class="modal fade"
					id="myModalEdit_{{$urgencia->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Editar Urgencia {{$urgencia->id}}
								</h5>

								<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
							</div>
							<div class="modal-body">
								<form
									method="POST"
									action="{{ route('urgencia.update',$urgencia->id) }}"
								>
									@method('PUT')@csrf
									<div class="form-group">
										<label for="f_entrada">Fecha Entrada: </label>
										<input
											type="date"
											class="form-control"
											name="f_entrada"
											value='{{$urgencia->f_entrada->format("d/m/Y")}}'
										>
									</div>

									<div class="form-group">
										<label class="control-label" for="categoria"
											>Tipo de Urgencia:</label
										>
										<select
											class="form-control"
											id="categoria"
											name="tipo_urgencia"
										>
											@foreach ($categorias as $categoria)
											<option value="{{$categoria->id}}"
												>{{$categoria->tipo_urgencia}}</option
											>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label class="control-label" for="tratamiento"
											>Tratamiento:</label
										>
										<select
											class="form-control"
											id="tratamiento"
											name="tratamiento"
										>
											@foreach ($tratamientos as $tratamiento)
											<option value="{{$tratamiento->id}}"
												>{{$tratamiento->tratamiento}}</option
											>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label class="control-label" for="paciente"
											>Paciente:</label
										>
										<select class="form-control" id="paciente" name="paciente">
											@foreach ($pacientes as $paciente)
											<option value="{{$paciente->id}}"
												>{{$paciente->nombre}}</option
											>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label class="control-label" for="medico">Medcio:</label>
										<select class="form-control" id="medico" name="medico">
											@foreach ($medicos as $medico)
											<option value="{{$medico->id}}"
												>{{$medico->nombre}}</option
											>
											@endforeach
										</select>
									</div>

									<!--token-->
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-info">
												Guardar
											</button>
										</div>
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

				<!-------------------->

				<td>
					<form method="POST" action="/urgencia/{{$urgencia->id}}">
						<!--<input class="btn btn-danger" type="submit" value="Borrar" />-->
						<button id="botonCentrar" class="btn btn-secondary" type="submit">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="16"
								height="16"
								fill="currentColor"
								class="bi bi-x-circle-fill"
								viewBox="0 0 16 16"
							>
								<path
									d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
								></path>
							</svg>
						</button>
						<input type="hidden" name="_method" value="DELETE" />
						@csrf
					</form>
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>

<script>
	$(document).ready(function () {
		var t = $('#tabla_urgencias').DataTable({
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
	table {
		background-color: white;
	}

	img {
		border-radius: 5px;
		width: 50px;
		height: 50px;
	}
</style>
@endsection