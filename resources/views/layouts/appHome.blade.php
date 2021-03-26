<!DOCTYPE html>
<html lang="es" style="
    height: 100%;
">
	<head>
		<title>M.S.S.P</title>
		<meta charset="UTF-8" />
		<meta name="title" content="Título de la WEB" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link
			rel="stylesheet"
			href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"
		/>
		<link rel="stylesheet" href="/css/style.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
			integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css"
		/>

		<!--------------------------Script---------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
		></script>
		<script
			type="text/javascript"
			src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
			integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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