 


<!DOCTYPE html>
<html lang="es">
	<head>
    	<link rel="shortcut icon" href="../img/minilogo.png" type="image/png">
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
			<div>

				@yield("content")
			</div>
</div>

	</body>
</html>

	  

<style>
		.logoApp{
		width:80%;
		height:auto;
		padding-top:4%;
		padding-bottom:4%;
		margin-top:4%;
		background-color:white;
			    border-radius: 10%;
	}
	.conter_welcom{
		
    margin-top: 20%;

	}
	
	body{
		/*background-color:lightblue;*/
		background-image:url("img/OtroFondo.jpg");
		background-size:100% 100%;
		background-repeat:no-repeat;
	}
	h2{
		font-weight: bold;
	}
</style>
	  
