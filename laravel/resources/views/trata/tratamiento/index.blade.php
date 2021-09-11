@extends ('layouts.admin')
@if(Auth::user()->nivel==1)
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de tratamientos <a href="tratamiento\create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('trata.tratamiento.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Nombre</th>
					<th>Precio</th>
					
					<th>Opciones</th>
				</thead>
               @foreach ($tratamientos as $trat)
				<tr>
					
					<td>{{ $trat->nombre}}</td>
					<td>{{ $trat->precio}}</td>
					

					<td>
						<a href="{{URL::action('TratamientoController@edit',$trat->id_tratamiento)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$trat->id_tratamiento}}" data-toggle="modal"><button class="btn btn-danger">Cancelar</button></a>
                         <a href="{{URL::action('TratamientoController@show',$trat->id_tratamiento)}}"><button class="btn btn-primary">Mostrar</button></a>
					</td>
				</tr>
				@include('trata.tratamiento.modal')
				@endforeach
			</table>
		</div>
		{{$tratamientos->render()}}
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