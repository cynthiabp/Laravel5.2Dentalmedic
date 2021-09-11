@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar tratamiento</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($tratamiento,['method'=>'PATCH','route'=>['trata.tratamiento.update',$tratamiento->id_tratamiento]])!!}
            {{Form::token()}}

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="Nombre" class="form-control" value="{{$tratamiento->nombre}}{{old('nombre')}}" placeholder="Nombre">
            </div>
            </div>
            

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type=number step="any" name="Precio" class="form-control"
                  value="{{$tratamiento->precio}}{{old('precio')}}" placeholder="Precio">
            </div>
            </div>

            
           
           

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            </div>
           

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection