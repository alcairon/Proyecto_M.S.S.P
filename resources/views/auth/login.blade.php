@extends('layouts.appLogin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Acceso') }}
                                </button>
								<button type="submit" class="btn btn-primary">
									 <a id=registrar name=Registrarse class="underline text-sm text-gray-600 hover:text-gray-900"  href="/register ">
										 Registrarte
									</a>
								</button>
                                    

							</div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--><section>
	<div class="page">
		<div class="welcome">
			<p class="conter_welcom">
				<img class="logoApp" src='/img/Medical services storage program.png'>
			</p>
			<p>
				<button class="sign_in">Iniciar Sesión</button>
				<button class="btn">Volver</button>
			</p>
		</div>
		<div class="sign_up">
			<!--<form method="POST" action="{{ route('register') }}">
                        @csrf
			<h2>Registrarse</h2>
			<input id="name" type="text" name="name" placeholder="Nombre" required><br>
			<input id="email" type="email" name="email" placeholder="Email" required><br>
			<input id="password" type="password" name="password" placeholder="Contraseña" required><br>
            <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseñass" required autocomplete="new-password"><br>
				<button type="submit" class="up">
                                    {{ __('Registrarse') }}
                                </button>
		</form>-->
			
			<h2>
				Bienvenido a
			<br>
				Medical Services Storage Program
			</h2>
			<p>
				<img class="minilogo" src='/img/minilogo.png'>
			</p>
			<p>
				Carlos Felipe Martin Cabrera 
			
				&circledR;
			</p>
	</div>
	<div class="login">
			<div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
							<h2>Iniciar Sesión</h2>
							<!--<input type="email" name="email" placeholder="Email" required><br>-->
							<input  id="email"type="email"   name="email" placeholder="Correo" value="{{ old('email') }}" required autocomplete="email" autofocus><br>
							<!--<input type="password" name="password" placeholder="Password" required><br>-->
								<input id="password" type="password"  name="password" placeholder="Contraseña" required autocomplete="current-password"><br>



							<!--<input type="submit" name="sign_in" value="Sign In" class="in">-->
								<button type="submit" class="in">
													{{ __('Acceso') }}
												</button>
						</form>
				</div>
		</div>
		
	</div>
</section>
	<style>
		.w-10 {
			margin-left:10%;
			height:5%;
			width:5%;

		}
		#registrar{
			color:white;
		}

		img{
			width:250px;
			height:250px;
		}

		body{
			background-color:lightblue;
		}
		.minilogo{
		width: 30%;
		height: auto;
		margin-bottom:1%;

		
	}
		
	}*/
		@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,700');

section
{
	position: relative;
	width: 100%;
	height: 90%;
	background: ;
}
section .page
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 800px;
	height: 400px;
	background: #fff;
	border-radius: 5px;
	box-shadow: 0px 5px 20px rgba(0,0,0,0.5);
}
section .page .welcome
{
	position: absolute;
	top: 0;
	left: 0;
	width: 300px;
	height: 400px;
	border-top-left-radius:  5px;
	border-bottom-left-radius:  5px;
	background: #0D47A1;
	text-align: center;
	transition: 1s cubic-bezier(.95,.32,.37,1.31);
	z-index: 2;
}
section .page .welcome h2
{
	text-align: center;
	margin: 90px 0;
	font-family: 'Poppins';
	letter-spacing: 2px;
	color: #fff;
}
section .page .welcome p
{
	padding: 0 25px;
	text-align: center;
	font-family: 'Poppins';
	color: #fff;
	font-weight: 300;
}
section .page .welcome .sign_in
{
	margin: 30px 0;
	width: 150px;
	height: 40px;
	text-align: center;
	border-radius: 30px;
	outline: none;
	border:none;
	border:1px solid #fff;
	font-family: 'Poppins';
	background-color:white;
	color: #0D47A1;
	cursor: pointer;
	opacity: 1;
	visibility: visible;
	transition: .5s;
}
section .page .welcome .btn
{
	position: absolute;
	top: 57.5%;
	left: 25%;
	width: 150px;
	height: 40px;
	text-align: center;
	border-radius: 30px;
	outline: none;
	border:none;
	background: transparent;
	border:1px solid #fff;
	font-family: 'Poppins';
	color: #fff;
	cursor: pointer;
	opacity: 0;
	visibility: hidden;
}
section .page .welcome .btn.active
{
	margin-top: 18%;
	opacity: 1;
	visibility: visible;
	transition: .5s;
	transition-delay: .5s;
}
section .page .welcome .sign_in.active
{
	opacity: 0;
	visibility: hidden;
	display: none;
	transition: .5s;
	transition-delay: .5s;
}
section .page .sign_up
{
	position: absolute;
	top: 0;
	left: 300px;
	width: 500px;
	height: 100%;
	text-align: center;
	transition: 1s cubic-bezier(.95,.32,.37,1.31);
	z-index: 1;
	opacity: 1;
	visibility: visible;
}
section .page .sign_up p{
    margin-top: 10%;	
}
section .page .sign_up h2
{
	position: relative;
	margin: 50px 0;
	padding: 0;
	font-family: 'Poppins';
}
section .page .sign_up input
{
	margin: 5px 0;
	width: 300px;
	height: 30px;
	font-family: 'Poppins';
	color: #000;
	font-weight: 700;
}
section .page .sign_up input[type="text"],
section .page .sign_up input[type="email"],
section .page .sign_up input[type="password"]
{
	border:none;
	outline: none;
	border-bottom: 1px solid #000;
	transition: .5s;
}
section .page .sign_up input[type="text"]:focus,
section .page .sign_up input[type="email"]:focus,
section .page .sign_up input[type="password"]:focus
{
	border-bottom-color: #D50000;
	transition: .5s;
}
section .page .sign_up .up
{
	width: 150px;
	height: 40px;
	font-weight: 400;
	border:none;
	outline: none;
	background: #000;
	color: #fff;
	border-radius: 30px;
	transition: .5s;
	cursor: pointer;
}
section .page .sign_up .up:hover
{
	background: transparent;
	border:2px solid #000;
	color: #000;
	font-weight: 700;
}
section .page .welcome.active
{
	background: #000;
	color: #fff;
	left: 62.5%;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px; 
	transition: 1s cubic-bezier(.95,.32,.37,1.31);
	z-index: 2;
}
section .page .sign_up.active
{
	left: 0;
	opacity: 0;
	visibility: hidden;
	transition: 1s cubic-bezier(.95,.32,.37,1.31);
}
section .page .login
{
	position: absolute;
	top: 0;
	left: 300px;
	width: 500px;
	height: 100%;
	text-align: center;
	opacity: 0;
	visibility: hidden;
}

section .page .login h2
{
	position: relative;
	margin: 50px 0;
	padding: 0;
	font-family: 'Poppins';
}
section .page .login input
{
	margin: 5px 0;
	width: 300px;
	height: 30px;
	font-family: 'Poppins';
	color: #000;
	font-weight: 700;
}
section .page .login input[type="email"],
section .page .login input[type="password"]
{
	border:none;
	outline: none;
	border-bottom: 1px solid #000;
	transition: .5s;
}
section .page .login input[type="email"]:focus,
section .page .login input[type="password"]:focus
{
	border-bottom-color: #2ecc71;
	transition: .5s;
}
section .page .login .in
{
	    margin-top: 4%;
	width: 150px;
	height: 40px;
	font-weight: 400;
	border:none;
	outline: none;
	background: #000;
	color: #fff;
	border-radius: 30px;
	transition: .5s;
	cursor: pointer;
}
section .page .login .in:hover
{
	background: transparent;
	border:2px solid #000;
	color: #000;
	font-weight: 700;
}
section .page .login.active
{
	left: 0;
	opacity: 1;
	visibility: visible;
	transition: 1s cubic-bezier(.95,.32,.37,1.31);
}
	</style>
@endsection
<script>
	$(document).ready(function(){
		$('.sign_in').click(function(){
			$('.login').addClass('active')
			$('.welcome').addClass('active')
			$('.sign_in').addClass('active')
			$('.btn').addClass('active')
			$('.sign_up').addClass('active')
		})
		$('.btn').click(function(){
			$('.sign_up').removeClass('active')
			$('.login').removeClass('active')
			$('.welcome').removeClass('active')
			$('.sign_up').removeClass('active')
			$('.btn').removeClass('active')
			$('.sign_in').removeClass('active')
		})
	})
</script>
