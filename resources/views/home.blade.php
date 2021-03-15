
@extends('layouts.app')

@section('content')
<div class="container" id ="container">
    <div class="row justify-content-center">
		<img class="inicioUrgencia" src='img/InicioUrgencias.jpg'>
		
        <!--<div class="col-md-8">
			<img class=" width=841.89px height=595.28px " src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>
			
          <ul>
			  
              <li>
                    <a href="/urgencia">Urgencias</a>
              </li>
              <li>
                    <a href="/medico">Medicos</a>
              </li>
              <li>
                    <a href="/paciente">Pacientes</a>
              </li>
              
			  <li>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
							
                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Salir') }}
                            </a>
						
                        </form>
              </li>
				
          </ul>-->

						
			<!--	
			<table id ="container">		
				<tr>
					<td>
						<a name=urgencia class="underline text-sm text-gray-600 hover:text-gray-900"  href="/urgencia ">
							<img class="w-10" src='https://kabla.mx/wp-content/uploads/2016/07/icono-urgencias.png'>
							
						</a>
						<br>
						<a id=palabra>Urgencias</a>

					</td>
				
					<td>
						<a name=medico class="underline text-sm text-gray-600 hover:text-gray-900" href="/medico">
							<img class="w-10" src='https://png.pngtree.com/png-vector/20190514/ourlarge/pngtree-stethoscope-icon-png-image_1040316.jpg'>
							 
						</a>
						<br>
						<a id=palabra>Médicos</a>
					</td>
				
				</tr>
				<tr >
					<td >
						<a id=paciente class="underline text-sm text-gray-600 hover:text-gray-900" href="/paciente">
							<img id=paciente class="w-10" src='https://www.flaticon.es/svg/static/icons/svg/754/754554.svg'>
								 
						</a>
						<br>
						<a id=palabra>Pacientes   </a>
					</td>
					
				</tr>
				
			</table>	
-->
					
				
			
<!--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
-->

    </div>
</div>


<style>
	.logout {
		padding-right:10px;
		text-align:right;
		font-weight: bold;
		
	}

	

	body{
		background-color:lightblue;
	}
	
	.inicioUrgencia{
		width:90%;
		height:90%;
 
	}
	
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>


@endsection
