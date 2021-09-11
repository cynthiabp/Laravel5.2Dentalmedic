@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Datos del Paciente </h3>
                  <br>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($categoria,['method'=>'PATCH','route'=>['almacen.categoria.update',$categoria->id_paciente]])!!}
            {{Form::token()}}

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="Nombre" disabled="" class="form-control" value="{{$categoria->nombre}}" placeholder="Nombre">
            </div>
            </div>
          
          <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="apellido_pa">Apellido Paterno</label>
            	<input type="text" name="ApellidoPaterno" disabled="" class="form-control" value="{{$categoria->apellido_pa}}" placeholder="Apellido Paterno">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="apellido_ma">Apellido Materno</label>
            	<input type="text" name="ApellidoMaterno" disabled="" class="form-control"
                  value="{{$categoria->apellido_ma}}"  placeholder="Apellido Materno">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="fecha_naci">Fecha de Nacimiento</label>
            	<input   type="date" name="FechaNacimiento" disabled="" class="form-control"
                  value="{{$categoria->fecha_naci}}"  placeholder="Fecha de Nacimiento">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="lugar_naci">Lugar de Nacimiento</label>
            	<input type="text" name="LugarNacimiento"  disabled="" class="form-control" value="{{$categoria->lugar_naci}}"  placeholder="Lugar de Nacimiento">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="pais">Pais</label>
            	<input type="text" name="Pais" disabled="" class="form-control" 
                  value="{{$categoria->pais}}" placeholder="Pais">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="estado">Estado</label>
            	<input type="text" name="Estado" disabled="" class="form-control" value="{{$categoria->estado}}" placeholder="Estado">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="ciudad">Ciudad</label>
            	<input type="text" name="Ciudad"  disabled="" class="form-control" value="{{$categoria->ciudad}}" placeholder="Ciudad">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="codigo_postal">Código Postal</label>
            	<input type="number" name="CodigoPostal" disabled="" class="form-control" value="{{$categoria->codigo_postal}}"  placeholder="Código Postal">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="colonia">Colonia</label>
            	<input type="text" name="Colonia" disabled="" class="form-control" 
                  value="{{$categoria->colonia}}" placeholder="Colonia">
            </div>
            </div>


            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="calle">Calle</label>
            	<input type="text" name="Calle" disabled="" class="form-control" value="{{$categoria->calle}}" 
                  placeholder="Calle">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
              <div class="form-group">
            	<label for="numero_inter">Número Interior</label>
            	<input type="number" name="NumeroInte" disabled="" class="form-control"
                  value="{{$categoria->numero_inter}}"  placeholder="Número Interior">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="numero_exte">Número Exterior</label>
            	<input type="number" name="NumeroExte" disabled="" class="form-control"
                  value="{{$categoria->numero_exte}}"  placeholder="Número Exterior">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="celular">Celular</label>
            	<input type="tel" disabled="" name="Celular" class="form-control" 
                  value="{{$categoria->celular}}" placeholder="Celular">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="lada">Lada</label>
            	<input type="tel"  disabled="" name="Lada" class="form-control" 
                  value="{{$categoria->lada}}" placeholder="Lada">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input disabled="" name="Telefono" class="form-control" 
                  value="{{$categoria->telefono}}" placeholder="Teléfono">
            </div>
           </div>



            




			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection