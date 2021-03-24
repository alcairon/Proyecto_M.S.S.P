@extends("layouts.appVista")@section("content")
<div class="granContenedor">
	<h1 id="titulo">
		Listado De Tipos de Urgencias
		<!--<img class="logo" src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>-->
	</h1>

	<!--<a href="/home" class="btn btn-primary btn-sm">Inicio</a>-->
	<!--<a href="/categoria/create" class="btn btn-success btn-sm">Crear</a>-->
	<a
		href="/categoria/create"
		class="btn btn-success btn-sm"
		id="new"
		class="ver"
		data-toggle="modal"
		data-target="#myModalCrear"
		><i class="material-icons dp48">library_add</i>
	</a>

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
						Crear nuevo Tipo de Urgencia
					</h5>

					<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
				</div>
				<div class="modal-body">
					<form method="POST" class="form-horizontal" action="{{url('/categoria')}}">
						<!--<input type="hidden" name="_method" value="POST">-->
						@csrf

						<div class="form-group">
							<label class="control-label " for="tipo_urgencia">Tipo de Urgenica:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="tipo_urgencia"
									placeholder="Tipo de Urgencia"
									name="tipo_urgencia"
								/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label " for="descripcion_urgencia">Descripciรณn:</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									id="descripcion_urgencia"
									placeholder="Descripciรณn"
									name="descripcion_urgencia"
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

	<table id="tabla_categorias" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th hidden>Id</th>

				<th>Id</th>

				<th>Tipo de Urgencia</th>

				<th>Descripciรณn</th>

				<th>Ver</th>

				<th>Editar</th>

				<th>Borrar</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($categoria as $categoria)

			<tr>
				<td hidden>{{$categoria->id}}</td>

				<td>{{$categoria->id}}</td>

				<td>{{$categoria->tipo_urgencia}}</td>

				<td>{{$categoria->descripcion_urgencia}}</td>


				<td>
					<a
						data-id="{{$categoria->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModal_{{$categoria->id}}"
						><button type="button" class="btn btn-show">
						<i class="material-icons dp48">remove_red_eye</i>
						</button>
					</a>
				</td>

				<!-- Modal -->
				<div
					class="modal fade"
					id="myModal_{{$categoria->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"tabla_pacientes_wrapper
					aria-hidden="true"
				>
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Categoria {{$categoria->id}}
								</h5>

								<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label"
											>Id:{{$categoria->id}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Tipo de Urgencia: {{$categoria->tipo_urgencia}}</label
										>
									</div>

									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Descripciรณn: {{$categoria->descripcion_urgencia}}</label
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
						data-id="{{$categoria->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalEdit_{{$categoria->id}}"
						><button type="button" class="btn btn-edit" id="botonCentrar">
						<i class="material-icons dp48">border_color</i>
							
						</button
					></a>
				</td>
				<!-- Modal Edit -->
				<div
					class="modal fade"
					id="myModalEdit_{{$categoria->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Editar categoria {{$categoria->id}}
								</h5>
							</div>
							<div class="modal-body">
								<form
									method="POST"
									action="{{ route('categoria.update',$categoria->id) }}"
									role="form"
								>
									@method('put')@csrf
									<div class="form-group">
										<label class="control-label " for="nombre"
											>Tipo de Urgenica:</label
										>
										<div class="col-sm-10">
											<input
												type="text"
												class="form-control"
												placeholder="{{$categoria->tipo_urgencia}}"
												name="tipo_urgencia"
												value="{{$categoria->tipo_urgencia}}"
											/>
										</div>
										<div class="form-group">
											<label class="control-label " for="apellido"
												>Descripciรณn</label
											>
											<div class="col-sm-10">
												<input
													type="text"
													class="form-control"
													id="apellido"
													placeholder="{{$categoria->descripcion_urgencia}}"
													name="descripcion_urgencia"
													value="{{$categoria->descripcion_urgencia}}"
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
					<form method="POST" action="/categoria/{{$categoria->id}}">
						<!--<input class="btn btn-danger" type="submit" value="Borrar" />-->
						<button id="botonCentrar" class="btn btn-delete" type="submit">
							<i class="material-icons dp48">remove_circle_outline</i>
							
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
		var t = $('#tabla_categorias').DataTable({
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