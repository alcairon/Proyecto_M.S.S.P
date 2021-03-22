@extends("layouts.app2")@section("content")
<div class="granContenedor">
	<h1 id="titulo">
		Listado De Pacientes
		<!--<img class="logo" src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>-->
	</h1>

	<!--<a href="/home" class="btn btn-primary btn-sm">Inicio</a>-->
	<!--<a href="/paciente/create" class="btn btn-success btn-sm">Crear</a>-->
	<a
		href="/paciente/create"
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
						Crear Paciente
					</h5>

					<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
				</div>
				<div class="modal-body">
					<form method="POST" class="form-horizontal" action="{{url('/paciente')}}">
						<!--<input type="hidden" name="_method" value="POST">-->
						@csrf

						<div class="form-group">
							<label class="control-label col-sm-2" for="nombre">Nombre:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="nombre"
									placeholder="nombre"
									name="nombre"
								/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="apellido">Apellido:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="apellido"
									placeholder="apellido"
									name="apellido"
								/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="dni">Dni:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="dni"
									placeholder="dni"
									name="dni"
								/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="telefono">Teléfono:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="telefono"
									placeholder="telefono"
									name="telefono"
								/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info">Guardar</button>
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

	<table id="tabla_pacientes" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th hidden>Id</th>

				<th>Id</th>

				<th>Nombre</th>

				<th>Apellido</th>

				<th>DNI</th>

				<th>Teléfono</th>

				<th>Ver</th>

				<th>Editar</th>

				<th>Borrar</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($paciente as $paciente)

			<tr>
				<td hidden>{{$paciente->id}}</td>

				<td>{{$paciente->id}}</td>

				<td>{{$paciente->nombre}}</td>

				<td>{{$paciente->apellido}}</td>

				<td>{{$paciente->dni}}</td>

				<td>{{$paciente->telefono}}</td>

				<td>
					<a
						data-id="{{$paciente->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModal_{{$paciente->id}}"
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
							</svg></button
					></a>
				</td>

				<!-- Modal -->
				<div
					class="modal fade"
					id="myModal_{{$paciente->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Paciente {{$paciente->id}}
								</h5>

								<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label"
											>Id:{{$paciente->id}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Nombre: {{$paciente->nombre}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Apellido: {{$paciente->apellido}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>DNI: {{$paciente->dni}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Telefono: {{$paciente->telefono}}</label
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
						data-id="{{$paciente->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalEdit_{{$paciente->id}}"
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
				</td>
				<!-- Modal Edit -->
				<div
					class="modal fade"
					id="myModalEdit_{{$paciente->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Editar Paciente {{$paciente->id}}
								</h5>
							</div>
							<div class="modal-body">
								<form
									method="POST"
									action="{{ route('paciente.update',$paciente->id) }}"
									role="form"
								>
									@method('put')@csrf
									<div class="form-group">
										<label class="control-label col-sm-2" for="nombre"
											>Nombre:</label
										>
										<div class="col-sm-10">
											<input
												type="text"
												class="form-control"
												placeholder="{{$paciente->nombre}}"
												name="nombre"
												value="{{$paciente->nombre}}"
											/>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2" for="apellido"
												>Apellido:</label
											>
											<div class="col-sm-10">
												<input
													type="text"
													class="form-control"
													id="apellido"
													placeholder="{{$paciente->apellido}}"
													name="apellido"
													value="{{$paciente->apellido}}"
												/>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-sm-2" for="dni"
												>Dni:</label
											>
											<div class="col-sm-10">
												<input
													type="text"
													class="form-control"
													id="dni"
													placeholder="{{$paciente->dni}}"
													name="dni"
													value="{{$paciente->dni}}"
												/>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-sm-2" for="telefono"
												>Teléfono:</label
											>
											<div class="col-sm-10">
												<input
													type="text"
													class="form-control"
													id="telefono"
													placeholder="{{$paciente->telefono}}"
													name="telefono"
													value="{{$paciente->telefono}}"
												/>
											</div>
										</div>

										<button type="submit" class="btn btn-info">
											Guardar
										</button>
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
					<form method="POST" action="/paciente/{{$paciente->id}}">
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
		var t = $('#tabla_pacientes').DataTable({
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

	.logo {
		width: 150px;
		height: 150px;
	}

	img {
		border-radius: 5px;
		width: 50px;
		height: 50px;
	}
</style>
@endsection