 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



<style>
		
ul{
   	transform: translate(0,-50%);
	width: 100%;   
	text-align: center;
	margin-top:2%;
	margin-left:23%;
	/*background-color:white;*/
}
ul li{
    list-style: none;
    display: inline-block;
    margin-top: 5px;
}
ul li a{
    text-decoration: none;
    color: #262626;
    display: inline-block;
    position: relative;
    text-transform: uppercase;
    padding: 7px 7px;
    overflow: hidden;
	font-size:20px;
	font-weight: bold;
}
ul li a::before{
    content: '';
    position: absolute;
    top: calc(100% - 5px);   
	left: -50%;
    width: 30%;   
	height: 5px;
    background: #3498db;
    transition: .5s;
}
	
ul li a:hover::before{
    left: 50%;
}
	
	
	.logoApp{
		width:200px;
		height:200px;
		margin-left:70px;
	}
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/
</style>
	  

	  

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
	<div>
	   <div class="col-md-8">
			<img class="logoApp" src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>
			
          <ul>
			  
              <li>
                    <a href="/urgencia">Urgencias</a>
              </li>
			  
			  <li><a>|</a></li>
			  
              <li>
                    <a href="/medico">Medicos</a>
              </li>
			  
			<li><a>|</a></li>

			  
              <li>
                    <a href="/paciente">Pacientes</a>
              </li>
			  
			<li><a>|</a></li>

              
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
				
          </ul>
</div>

		@yield("content")
	</div>
</div>