@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Registro de Citas  <a href="cita\create"><button class="btn btn-success">Nueva</button></a></h3>
              
		@include('ci.cita.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Fecha</th>
					<th>Hora Inicio</th>
					<th>Hora Fin</th>
					<th>Paciente</th>
					<th>Opciones</th>
				</thead>
               @foreach ($citas as $ci)
				<tr>
					
					<td>{{ $ci->fecha}}</td>
					<td>{{ $ci->horainicio}}</td>
					<td>{{ $ci->horafin}}</td>
					<td>{{ $ci->paciente. ' '.$ci->apellido_pa.' '.$ci->apellido_ma}}</td>
					
       
					

					<td>
						<a href="{{URL::action('CitaController@edit',$ci->id_cita)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$ci->id_cita}}" data-toggle="modal"><button class="btn btn-danger">Cancelar</button></a>
                         <a href="{{URL::action('CitaController@show',$ci->id_cita)}}"><button class="btn btn-primary">Mostrar</button></a>
                          
					</td>
				</tr>
				@include('ci.cita.modal')
				@endforeach
			</table>
		</div>
		{{$citas->render()}}
	</div>
</div>

@endsection