@extends ('layouts.admin')
@if(Auth::user()->nivel==1 || Auth::user()->id==$usuario->id)
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Usuario</h3>
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
            	<input type="text" name="name" class="form-control" value="{{$usuario->name}}" placeholder="Nombre">
            </div>
            </div>
          
          <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email"  class="form-control" value="{{$usuario->email}}" placeholder="Email">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nivel">Nivel</label>
                <input  name="nivel"  class="form-control" value="{{$usuario->nivel}}"  placeholder="0 = Secretaria ó 1 = Administrador">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="password">Contraseña</label>
            	<input type="password" name="password"  class="form-control"
                  value="{{$usuario->password}}"  placeholder="Contraseña">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            <label for="password-confirm" >Confirmar contraseña</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">

                               
          </div>
        </div>

        
            


<div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

  </div>



			{!!Form::close()!!}		
            
		</div>
	</div>


@endsection
@else
@section('contenido')
<div class="alert alert-warning" role="alert"><h2>
  <span class="fa fa-exclamation-triangle" aria-hidden="true"></span>
  <span class="sr-only" >Error:</span> Acceso Restringido </h2>
</div>
@endsection
@endif
