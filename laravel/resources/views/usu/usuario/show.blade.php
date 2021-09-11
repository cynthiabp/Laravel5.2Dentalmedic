@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Datos del usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($usuario,['method'=>'PATCH','route'=>['usu.usuario.update',$usuario->id]])!!}
            {{Form::token()}}

           <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="name">Nombre</label>
            	<input type="text" name="name" disabled="" class="form-control" value="{{$usuario->name}}" placeholder="Nombre">
            </div>
            </div>
          <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" disabled="" class="form-control" value="{{$usuario->email}}" placeholder="Email">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nivel">Nivel</label>
                <input type="number" name="nivel" disabled="" class="form-control" value="{{$usuario->nivel}}"  placeholder="0 = Secretaria ó 1 = Administrador">
            </div>
            </div>

            
            




			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection