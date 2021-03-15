 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>



<style>
	/*
	.container {
		margin: 40px !important;
	}
	*/
	/*
	<h1>@lang("mensajes.saludo")</h1> si queremos mostrar el saludo en la pagina poner esto fuera
		*/*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
html {
    font-family:'roboto';
    font-size:16px;
}
body {
    background-color:#EEEFF0;
    max-width:1000px;
    margin:0 auto;

}

.c-listapplet-container {
    margin:1rem 0;
}
.c-table-container {
        overflow-x: scroll;
        max-height:380px;     
}

.c-list-applet__table {
    border-collapse: collapse;
    padding:1rem;
    border-radius:4px;
    background:rgb(255,255,255);

    
}

.c-list-applet__table-data-row,
.c-list-applet__table-row{
    height:45px;
    border-bottom:1px solid rgb(240,240,240);
}


.c-list-applet__table-row,
.c-list-applet__table-heading,
.c-list-applet__checkbox__th {
   
    background-color:#F5F6F8;
}
.c-list-applet-table--slim {
    height:20px;
}
.c-list-applet-table--default {
    height:45px;
}
.c-list-applet-table--large {
    height:50px;
}

.c-list-applet__table-heading,
.c-list-applet__table-details
 {
    padding:1rem; 
    height:45px;
    position:relative;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    max-width: 150px;
}
.c-list-applet__table-details {
    color:rgb(50,50,50);
}
.c-list-applet__table-heading,
.c-list-applet__checkbox__th {
    cursor:pointer;
    position: sticky;
    top:0;
    z-index: 2;
}

.c-list-applet-search__td {
    background-color:#F5F6F8;
    border-bottom:1px solid rgb(230,230,230);
    height:45px;
    padding:.5rem 1rem;
    position:sticky;
    top:51px;
    z-index: 2;
    box-shadow:1px 0px 0px rgb(230,230,230), 1px 1px 0px rgb(230,230,230);
}

.c-list-applet-search__td input[type='text'] {
    padding:.5rem;
    width:100%;
    border:1px solid rgb(230,230,230);
    border-radius:4px;
    min-width:75px;
}
.c-list-applet__pagination,
.c-list-applet__toolbar {
 
    background:white;
    width:100%;
    padding:.5rem 1rem;
    
}

.c-list-applet__pagination {
    border-radius:0 0 4px 4px;
    display:flex;
    align-items:center;
    justify-content: flex-end;
    height:45px;
}

.c-list-applet__toolbar {
    border-radius:4px 4px 0 0;
}

.c-list-applet__sort {
    font-size:0;
    width: 12px;
    height:12px;
    border:0;
    position:absolute;
    right:0;
    top:50%;
    transform:translateY(-50%);
    background:transparent;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'%3E%3Cpath fill='rgb(200,200,200)' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z'/%3E%3C/svg%3E");
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

.selected {
    background:rgba(222, 235, 255, 0.6);
}

.c-list-applet__checkbox__td {
    text-align:center;
}


.c-table-container input[type='checkbox'] {
    width:20px;
    height:20px;
    border-radius:4px;
    -webkit-appearance: none;
    border:1.5px solid rgb(100,100,100);
}


.c-table-container input[type='checkbox']:checked {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='rgb(0, 82, 204)' d='M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z'/%3E%3C/svg%3E");
    background-position: center;
    background-size:10px;
    background-repeat: no-repeat;
    background-color:rgb(255,255,255);
    border-color:rgb(0, 82, 204);
}
.c-table-container input[type='checkbox']:hover,
.c-table-container input[type='checkbox']:focus {
    border-color:rgb(0, 82, 204);
}


.c-list-applet-filter {
    
    background:rgb(0, 82, 204);
    color:rgb(255,255,255);
    border:0;
    border-radius:4px;
    padding:10px 15px;
    margin-left:auto;
}

.hidden {
    display:none;
}
	
#tabla_urgencias_wrapper{
	background-color:white;
	border-radius:5px;
	margin-top:10px;
	
}
#tabla_medicos_wrapper{
	background-color:white;
	border-radius:5px;
	margin-top:10px;
	
}
#tabla_pacientes_wrapper{
	background-color:white;
	border-radius:5px;
	margin-top:10px;
	
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
	   @yield("content")
	</div>
</div>