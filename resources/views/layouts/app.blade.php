 







<!DOCTYPE html>
<html lang="es">
	<head>
		<title>M.S.S.P</title>
		<meta charset="UTF-8" />
		<meta name="title" content="Título de la WEB" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>


 
		
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
  <ul>
			<li>
			  	<a href="/">
					<img class="logoApp" src='/img/minilogo.png'>
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
			  
			  
			
              
			 
				<li class="dropdown " >
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						{{ Auth::user()->name}}
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							
							<li class="minilist">
								<a href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
								<form id ="logout-form" method="POST" action="{{ route('logout')}}">
									@csrf
								</form>
							</li>
						</ul>
					</li>
				

              
          </ul>
  
  </div>


		@yield("content")
	</div>



	</body>
</html>

	  






	  


<style>
			
	*{
   /* margin:0;
    padding:0;
    box-sizing:border-box;*/
}
	.container {
max-width: 1140000px;
    padding-right: 0px;
    padding-left: 0px; 
    margin-right: auto;
    margin-left: auto;
	}
	
ul{
	width: 100%;   
	margin-bottom:5%;
	/*
   	transform: translate(0,-50%);
	width: 100%;   
	text-align: center;
	margin-top:2%;
	margin-left:20%;*/
	/*background-color:white;*/
}
ul li{
        list-style: none;
    display: inline-block;
    margin-top: 5px;
	margin-left:2%;
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

	
	.col-md-8{
		text-align:center;
	}
	body{
		/*background-color:lightblue;*/
		background-image:url("img/OtroFondo.jpg");
		background-size:100% 100%;
		background-repeat:no-repeat;
	}
		.logoApp{
		width: 100%;
		height: auto;
		margin-left:20%;
		margin-bottom:5%

		
	}
	
	
	#barraNavegacion {
  background-color: white;
	}
	
	
	.dropdown{
		float: right;
    	position: static;
		margin-top:2%;
		margin-right:2%;
		/*margin-left:45%;*/
	}
	
	.dropdown-menu{
		padding-left:2%;
		width: 2%;
	}
	

	
</style>