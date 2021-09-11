@extends ('layouts.admin')
@if(Auth::user()->nivel==1)
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de Usuarios <a href="usuario\create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('usu.usuario.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Usuario</th>
					<th>Email</th>
					<th>Nivel</th>
					<th>Opciones</th>
				</thead>
               @foreach ($usuarios as $us)
				<tr>
					
					<td>{{ $us->name}}</td>
					<td>{{ $us->email}}</td>
					<td>{{ $us->nivel}}</td>



					<td>
						<a href="{{URL::action('UsuarioController@edit',$us->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$us->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                         <a href="{{URL::action('UsuarioController@show',$us->id)}}"><button class="btn btn-primary">Mostrar</button></a>

					</td>
				</tr>
				@include('usu.usuario.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
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

