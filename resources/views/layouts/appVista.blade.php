<!DOCTYPE html>
<html lang="es">
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

		<link rel="stylesheet" href="responsive-nav.css" />

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
		<div id="main">
			<div class="container">
				<nav>
					<div class="nav-xbootstrap">
						<ul>
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
							<li>
								<a href="javascript:void(0)"
									>{{ Auth::user()->name}}<span
										class="glyphicon glyphicon-chevron-down iconsize"
									></span
								></a>
								<ul class="dropdown">
									
									<li class="minilist">
										<a
											href="{{ route('logout')}}"
											onclick="event.preventDefault();document.getElementById('logout-form').submit();"
											>{{ __('Salir') }}</a
										>
										<form
											id="logout-form"
											method="POST"
											action="{{ route('logout')}}"
										>
											@csrf
										</form>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="nav-bg-xbootstrap">
						<div class="navbar-xbootstrap">
							<span></span> <span></span> <span></span>
						</div>
						<a href="https://xbootstrap.com" class="title-mobile">M.S.S.P</a>
					</div>
				</nav>
				<div class="content"></div>
			</div>
		</div>

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

			<!--			
			<nav id="barraNavegacion" class="nav-collapse">
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
			</nav>
-->
			<div class="contenedorCentral">
				<div class="col-md-8"></div>

				@yield("content")
			</div>
		</div>
	</body>
</html>
<style>


	* {
	  margin: 0;
	  padding: 0;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  -ms-box-sizing: border-box;
	  box-sizing: border-box;
	}

	.content {
	  height: 10%;
	}
	a { text-decoration: none; }


	.container {
	  max-width: 1200px;
	  margin: 0 auto;
	  width: 100%;
	}

	.nav-xbootstrap {
	  display: block;
	  margin-top:2%;
	  margin-bottom: 5%;
	  background: white;
	  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  border-radius: 3px;
	  z-index:1000;
	}
	.iconsize {
	    font-size: 12px;
	    top: 2px;
	    left: 3px;
	}

	.nav-xbootstrap ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  display: block;
	}

	.nav-xbootstrap li {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  display: inline-block;
	  position: relative;
	  font-size: 14;
	  color: #def1f0;
	}

	.nav-xbootstrap li a {
	  padding: 15px 20px;
	  font-size: 14;
	  color: black;
	  display: inline-block;
	  outline: 0;
	  font-weight: 400;
	  text-decoration: none;
	}

	.nav-xbootstrap li:hover ul.dropdown {
	    display: block;
	}

	.nav-xbootstrap li ul.dropdown {
	  position: absolute;
	  display: none;
	  width: 200px;
	  background: #2980B9;
	  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  -ms-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  -o-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
	  padding-top: 0;
	}

	.nav-xbootstrap li ul.dropdown li {
	  display: block;
	  list-style-type: none;
	}

	.nav-xbootstrap li ul.dropdown li a {
	  padding: 15px 20px;
	  font-size: 15px;
	  color: #fff;
	  display: block;
	  font-weight: 400;
	}

	.nav-xbootstrap li ul.dropdown li:last-child a { border-bottom: none; }

	.nav-xbootstrap li:hover a {
	  background: #2980B9;
	  color: #fff !important;
	}

	.nav-xbootstrap li:first-child:hover a { border-radius: 3px 0 0 3px; }

	.nav-xbootstrap li ul.dropdown li:hover a { background: rgba(0,0,0, .1); }

	.nav-xbootstrap li ul.dropdown li:first-child:hover a { border-radius: 0; }

	.nav-xbootstrap li:hover .arrow-down { border-top: 5px solid #fff; }

	.arrow-down {
	  width: 0;
	  height: 0;
	  border-left: 5px solid transparent;
	  border-right: 5px solid transparent;
	  border-top: 5px solid #def1f0;
	  position: relative;
	  top: 15px;
	  right: -5px;
	  content: '';
	}
	.title-mobile {
	  display: none;
	}
	 @media only screen and (max-width:900px) {

	.nav-xbootstrap {
	  background: #fff;
	  width: 200px;
	  height: 100%;
	  display: block;
	  position: fixed;
	  left: -200px;
	  top: 0px;
	  -webkit-transition: left 0.25s ease;
	  -moz-transition: left 0.25s ease;
	  -ms-transition: left 0.25s ease;
	  -o-transition: left 0.25s ease;
	  transition: left 0.25s ease;
	  margin: 0;
	  border: 0;
	  border-radius: 0;
	  overflow-y: auto;
	  overflow-x: hidden;
	  height: 100%;
	}
	.title-mobile {
	  position: fixed;
	  display: block;
	    top: 10px;
	    font-size: 20px;
	    left: 100px;
	    right: 100px;
	    text-align: center;
	    color: #FFF;
	}
	.nav-xbootstrap.visible {
	  left: 0px;
	  -webkit-transition: left 0.25s ease;
	  -moz-transition: left 0.25s ease;
	  -ms-transition: left 0.25s ease;
	  -o-transition: left 0.25s ease;
	  transition: left 0.25s ease;
	}

	.nav-bg-xbootstrap {
	  display: inline-block;
	  vertical-align: middle;
	  width: 100%;
	  height: 50px;
	  margin: 0;
	  position: absolute;
	  top: 0px;
	  left: 0px;
	  background: #03A9F4;
	  padding: 12px 0 0 10px;
	  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
		z-index:2000;
	}

	.navbar-xbootstrap {
	  display: inline-block;
	  vertical-align: middle;
	  height: 50px;
	  cursor: pointer;
	  margin: 0;
	    position: absolute;
	    top: 0;
	    left: 0;
	    padding: 12px;
	}

	.navbar-xbootstrap span {
	  height: 2px;
	  background: #fff;
	  margin: 5px;
	  display: block;
	  width: 20px;
	}

	.navbar-xbootstrap span:nth-child(2) { width: 20px; }

	.navbar-xbootstrap span:nth-child(3) { width: 20px; }

	.nav-xbootstrap ul { padding-top: 50px; }

	.nav-xbootstrap li { display: block; }

	.nav-xbootstrap li a {
	  display: block;
	  color: #505050;
	  font-weight: 600;
	}

	.nav-xbootstrap li:first-child:hover a { border-radius: 0; }

	.nav-xbootstrap li ul.dropdown { position: relative; }

	.nav-xbootstrap li ul.dropdown li a {
	  background: #2980B9 !important;
	  border-bottom: none;
	  color: #fff !important;
	}

	.nav-xbootstrap li:hover a {
	  background: #03A9F4;
	  color: #fff !important;
	}

	.nav-xbootstrap li ul.dropdown li:hover a {
	  background: rgba(0,0,0,.1); !important;
	  color: #fff !important;
	}

	.nav-xbootstrap li ul.dropdown li a { padding: 10px 10px 10px 30px; }

	.nav-xbootstrap li:hover .arrow-down { border-top: 5px solid #fff; }

	.arrow-down {
	  border-top: 5px solid #505050;
	  position: absolute;
	  top: 20px;
	  right: 10px;
	}

	.cover-bg {
	  background: rgba(0,0,0,0.5);
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	}
	 @media only screen and (max-width:1199px) {

	.container { width: 96%; }


	.fixed-top {
	  position: fixed;
	  top: 0;
	  right: 0;
	  left: 0;
	}
</style>
<script>
	$(document).ready(function () {
		$('.navbar-xbootstrap').click(function () {
			$('.nav-xbootstrap').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
	});
</script>