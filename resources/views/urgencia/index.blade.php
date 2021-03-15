@extends("layouts.app2")

@section("content")


<h1>
	Listado De  Urgencias	
		<img class="logo " src='https://upload.wikimedia.org/wikipedia/commons/1/1e/Servicio_canario_de_salud_%28SCS%29.svg'>
</h1>
<div>
		<ul><li>
					<a href="/home">Inicio</a>
              </li>
			
			<li><a>|</a></li>
			
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
<a href="/home" class="btn btn-primary btn-sm">Inicio</a>
<a href="/urgencia/create" class="btn btn-success btn-sm">Crear</a>
<table id="tabla_urgencias" class="table table-bordered table-striped">
	
	<thead>
		<tr>
			<th>Id</th>
			
			<th>Fecha Entrada</th>

			<th>Tipo Urgencia</th>
			
			<th>Tratamiento</th>
			
			<th>Paciente</th>	
			
			<th>Medico</th>	
			
			<th>Ver</th>
			
			<th>Borrar</th>

			
			
			
		</tr>
	</thead>

<tbody>
@foreach ($urgencia as $urgencia)

	<tr>
		<td>{{$urgencia->id}}</td>
		
		<td>{{$urgencia->f_entrada->format("d/m/Y")}}</td>
		
		<td>{{$urgencia->categoria->tipo_urgencia}}</td>
		
		<td>{{$urgencia->trat->tratamiento}}</td>
		
		<td >{{$urgencia ->pacient->nombre}}</td>
		
		<td>{{$urgencia->doctor->nombre}}</td>
		
		<td>
			<a href="/urgencia/{{$urgencia->id}}" ><img  src="https://image.freepik.com/iconos-gratis/ver-detalles_318-1493.jpg"></a>
		</td>

		<td>
			<form method="POST" action="/urgencia/{{$urgencia->id}}">
				<input class="btn btn-danger" type="submit" value="Borrar"> 
				<input type="hidden" name="_method" value="DELETE">
				@csrf
			</form>		
		</td>
			
			
		
		
		
	</tr>

@endforeach

</tbody>
</table>


<script>

	$(document).ready(function(){
        var t=$("#tabla_urgencias").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
    });
	
	

</script>
<style>
	table{
		background-color:white;
	}

	.logo{
		width:150px;
		height:150px;
	}
	img{
		border-radius: 5px;
		width:50px;
		height:50px;
	
	}
	
	body{
		background-color:lightblue;
	}
	
		
	
ul{
   	transform: translate(0,-50%);
	width: 100%;   
	text-align: center;
	margin-top:2%;
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
</style>
@endsection
