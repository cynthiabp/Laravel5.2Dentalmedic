@extends ('layouts.admin')
@if(Auth::user()->nivel==1)
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de Consultas <a href="consulta\create"><button class="btn btn-success">Nuevo</button></a></h3>
@include('co.consulta.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="table-resposive">
			<table class="table table-striped table-bordered table-condesed tabe-hover">
				<thead>
					
					<th>Fecha Consulta</th>
					<th>Paciente</th>	
					<th>Tratamiento</th>
					<th>Observación</th>							
					<th>Opciones</th>
				</thead>
				@foreach ($consultas as $co)
				
				<tr>
					
					<td>{{$co->fecha_consulta}}</td>
					<td>{{$co->paciente. ' '.$co->apellido_pa.' '.$co->apellido_ma}}</td>
					<td>{{$co->tratamiento}}</td>
					<td>{{$co->descripcion}}</td>
					
														                 
                         
                    <td>
                    	<!-- <a href="{{URL::action('ConsultaController@edit',$co->id_consulta)}}""><button class="btn btn-info">Editar</button></a> -->
                        	<!-- <a href="" data-target="#modal-delete-{{$co->id_consulta}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
                         <a href="{{URL::action('ConsultaController@show',$co->id_consulta)}}"><button class="btn btn-primary">Mostrar</button></a>
                    </td>
                   	</tr>
                 @include('co.consulta.modal')
                @endforeach
                
				</table>
			</div>
			{{$consultas->render()}}
		</div>

	</div>
@endsection
@else
@section('contenido')
<div class="alert alert-warning" role="alert"><h2>
	<span class="fa fa-exclamation-triangle" aria-hidden="true"></span>
	<span class="sr-only" >Error:</span> Acceso Restringido ¡solo Administrador! </h2>
</div>
@endsection
@endif
