@extends("layouts.appVista") @section("content")
<div class="granContenedor">
	<h1 id="titulo">
		Listado De Médicos
		<!--<img class="logo" src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>-->
	</h1>
	<!--<a href="/home" class="btn btn-primary btn-sm">Inicio</a>-->
	<!--<a href="/medico/create" class="btn btn-success btn-sm">Crear</a>-->
	<a
		href="/medico/create"
		class="btn btn-success btn-sm"
		id="new"
		class="ver"
		data-toggle="modal"
		data-target="#myModalCrear"
		><i class="material-icons dp48">library_add</i></a
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
						Crear Medico
					</h5>

					<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>-->
				</div>
				<div class="modal-body">
					<form method="POST" class="form-horizontal" action="{{url('/medico')}}">
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

	<table id="tabla_medicos" class="table table-bordered table-striped" style="width: 100%;">
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
			@foreach ($medico as $medico)

			<tr>
				<td hidden>{{$medico->id}}</td>

				<td>{{$medico->id}}</td>

				<td>{{$medico->nombre}}</td>

				<td>{{$medico->apellido}}</td>

				<td>{{$medico->dni}}</td>

				<td>{{$medico->telefono}}</td>

				<td style="text-align: center;vertical-align: middle">
					<a
						data-id="{{$medico->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModal_{{$medico->id}}"
						><button type="button" class="btn btn-show">
						<i class="material-icons dp48">remove_red_eye</i>
							
						</button>
					</a>
				</td>

				<!-- Modal -->
				<div
					class="modal fade"
					id="myModal_{{$medico->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Medico {{$medico->id}}
								</h5>
								<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
							</button>-->
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label"
											>Id:{{$medico->id}}</label
										>
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Nombre: {{$medico->nombre}}</label
										>
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Apellido: {{$medico->apellido}}</label
										>
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>DNI: {{$medico->dni}}</label
										>
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label"
											>Telefono: {{$medico->telefono}}</label
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
						data-id="{{$medico->id}}"
						class="ver"
						data-toggle="modal"
						data-target="#myModalEdit_{{$medico->id}}"
						><button type="button" class="btn btn-edit" id="botonCentrar">
						<i class="material-icons dp48">border_color</i>
							
						</button
					></a>
				</td>
				<!-- Modal Edit -->
				<div
					class="modal fade"
					id="myModalEdit_{{$medico->id}}"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true"
				>
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">
									Editar Medico {{$medico->id}}
								</h5>
							</div>
							<div class="modal-body">
								<form
									method="POST"
									action="{{ route('medico.update',$medico->id) }}"
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
												placeholder="{{$medico->nombre}}"
												name="nombre"
												value="{{$medico->nombre}}"
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
													placeholder="{{$medico->apellido}}"
													name="apellido"
													value="{{$medico->apellido}}"
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
													placeholder="{{$medico->dni}}"
													name="dni"
													value="{{$medico->dni}}"
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
													placeholder="{{$medico->telefono}}"
													name="telefono"
													value="{{$medico->telefono}}"
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
					<a>
					<form method="POST" action="/medico/{{$medico->id}}" class="d-inline formulario-eliminar">
						<!--<input class="btn btn-danger" type="submit" value="Borrar" />-->
						<button id="botonCentrar" class="btn btn-delete" type="submit">
							<i class="material-icons dp48">remove_circle_outline</i>
							
						</button>
						<input type="hidden" name="_method" value="DELETE" />
						@csrf
					</form>
					</a>
				</td>
			</tr>

			@endforeach
		</tbody>
	</table>
</div>


<script>
	$(document).ready(function () {
		var t = $('#tabla_medicos').DataTable({
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
@if(Session::has('anadir_medico'))
<script>
	toastr.success("{!!Session::get('anadir_medico')!!}");
</script>
@endif 

<!-------------------Confirmación de Edición------------------------->

@if(Session::has('editar_medico'))
<script>
	toastr.success("{!!Session::get('editar_medico')!!}");
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
</style>
@endsection