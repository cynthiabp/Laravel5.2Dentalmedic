@extends ('layouts.admin')
@if(Auth::user()->nivel==1)
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de pacientes <a href="categoria\create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('almacen.categoria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>			
					<th>Opciones</th>
				</thead>
               @foreach ($categorias as $cat)
				<tr>
					
					<td>{{ $cat->nombre}}</td>
					<td>{{ $cat->apellido_pa}}</td>
					<td>{{ $cat->apellido_ma}}</td>
					
					

					<td>

						

						<a href="{{URL::action('CategoriaController@edit',$cat->id_paciente)}}"><button class="btn btn-info">Editar</button></a>

						<a href="" data-target="#modal-delete-{{$cat->id_paciente}}" data-toggle="modal"><button class="btn btn-danger">Cancelar</button></a>  
						
                      	<a href="{{URL::action('CategoriaController@show',$cat->id_paciente)}}"><button class="btn btn-primary">Mostrar</button></a>

                  	<a href="{{URL::action('ConsultaController@edit',$cat->id_paciente)}}"><button class="btn btn-success">Expediente</button></a>
                     
                      	
                         
					</td>
				</tr>
				@include('almacen.categoria.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
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