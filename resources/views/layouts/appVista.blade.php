<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Título de la WEB</title>
		<meta charset="UTF-8" />
		<meta name="title" content="Título de la WEB" />
		<meta name="description" content="Descripción de la WEB" />

		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link
			rel="stylesheet"
			href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"
		/>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body>
		<div class="container">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div id="barraNavegacion">
				<ul class="menu">
					<li>
						<a href="/">
							<img class="logoApp" src="/img/minilogo.png" />
						</a>
					</li>

					<li>
						<a href="/urgencia">Urgencias</a>
					</li>

					<li><a>|</a></li>

					<li>
						<a href="/medico">Médicos</a>
					</li>

					<li><a>|</a></li>

					<li>
						<a href="/paciente">Pacientes</a>
					</li>

					<li><a>|</a></li>

					<li>
						<a href="/categoria">Tipos De Urgencias</a>
					</li>

					<li class="dropdown">
						<a
							href="#"
							class="dropdown-toggle"
							data-toggle="dropdown"
							role="button"
							aria-expanded="false"
						>
							{{ Auth::user()->name}}
							<span class="caret"></span
						></a>
						<ul class="dropdown-menu" role="menu">
							<li class="minilist">
								<a
									href="{{ route('logout')}}"
									onclick="event.preventDefault();document.getElementById('logout-form').submit();"
									>{{ __('Salir') }}</a
								>
								<form id="logout-form" method="POST" action="{{ route('logout')}}">
									@csrf
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="contenedorCentral">
				<div class="col-md-8"></div>

				@yield("content")
			</div>
		</div>

	</body>
</html>