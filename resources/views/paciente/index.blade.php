@extends("layouts.appVista")@section("content")
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

	<table id="tabla_pacientes" class="table table-bordered table-striped" style="width: 100%;">
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

				<td style="text-align: center;vertical-align: middle">
					<a
						data-id="{{$paciente->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModal_{{$paciente->id}}"
						><button type="button" class="btn btn-show">
						<i class="material-icons dp48">remove_red_eye</i>
							<!--<svg
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
							</svg>-->
						</button>
					</a>
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
				<td style="text-align: center;vertical-align: middle">
					<a
						data-id="{{$paciente->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalEdit_{{$paciente->id}}"
						><button type="button" class="btn btn-edit" id="botonCentrar">
						<i class="material-icons dp48">border_color</i>
							
						</button
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

				<td style="text-align: center;vertical-align: middle">
					<form method="POST" action="/paciente/{{$paciente->id}}"  class="d-inline formulario-eliminar">
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
		var t = $('#tabla_pacientes').DataTable({
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

<!-------------------Confirmación de Añadida------------------------->
@if(Session::has('anadir_paciente'))
<script>
	toastr.success("{!!Session::get('anadir_paciente')!!}");
</script>
@endif 

<!-------------------Confirmación de Edición------------------------->

@if(Session::has('editar_paciente'))
<script>
	toastr.success("{!!Session::get('editar_paciente')!!}");
</script>
@endif 



<!-------------------Borrar Con Confirmación------------------------->

@if(Session::has('eliminar')== 'ok')
	<script>
		Swal.fire(
			  '¡Borrado!',
			  'El elemento ha sido borrado con exito.',
			  'success'
			)
	</script>
@endif
<script>
	$('.formulario-eliminar').submit(function(e){
		e.preventDefault();
		
		Swal.fire({
		  title: '¿Estás seguro que quieres eliminarlo?',
		  text: "¡Luego no se podra cambiar!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, borralo!'
		}).then((result) => {
		if (result.value){
			
			this.submit();
			
			}
		})
		
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