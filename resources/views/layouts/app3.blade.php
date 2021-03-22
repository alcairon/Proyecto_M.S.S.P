 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



<style>
		body{
		background-color:lightblue;
	}
		.logoApp{
		width:30%;
		height:auto;
		margin-left:35%;
		margin-bottom:4%;
		margin-top:4%;
	}
	

	
	body{
		/*background-color:lightblue;*/
		background-image:url("img/fondoWeb.jpg");
		background-size:100% 100%;
		background-repeat:no-repeat;
	}
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
		<img class="logoApp" src='/img/Medical services storage program.png'>
		@yield("content")
	</div>
</div>