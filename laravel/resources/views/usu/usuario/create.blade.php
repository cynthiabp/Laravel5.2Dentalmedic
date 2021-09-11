@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo Usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'usu/usuario','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
           
			


 		<div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="name">Usuario</label>
            	<input type="text" name="name"  class="form-control" value="{{old('name')}}"  placeholder="Nombre...">
            </div>
            </div>
          
          <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email"  class="form-control" value="{{old('email')}}"  placeholder="Email...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="nivel">Nivel</label>
                <input type="number" name="nivel"  class="form-control" value="{{old('nivel')}}"  placeholder="0 = Secretaria ó 1 = Administrador">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="password">Contraseña</label>
            	<input type="password" name="password" value="{{old('password')}}" class="form-control"
                  placeholder="Contraseña...">
            </div>
            </div>

                         <div class="col-lg-ms-6 col-md-6 col-xs-12">
                              <div class="form-group">
                            <label for="password-confirm" >Confirmar contraseña</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirmar contraseña...">

                               
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