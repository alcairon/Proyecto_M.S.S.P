@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
				<img class=" width=841.89px height=595.28px " src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>
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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
						<!--
						<div class="flex mt-4 justify-center">
						 <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login.google') }}">
								<img class="w-10" src='https://cdn.iconscout.com/icon/free/png-256/google-chrome-5-722700.png'>
							</a>
            			</div>
						-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
								<button type="submit" class="btn btn-primary">
									 <a id=registrar name=Registrarse class="underline text-sm text-gray-600 hover:text-gray-900"  href="/register ">
										 Registrarte
									</a>
								</button>
                                    

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
	</style>
@endsection
