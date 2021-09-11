@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar datos del paciente</h3>
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
            	<input type="text" name="Nombre"  class="form-control" value="{{$categoria->nombre}}{{old('nombre')}}" placeholder="Nombre...">
            </div>
          </div>


                  <div class="col-lg-ms-4 col-md-4 col-xs-12">
                        <div class="form-group">
            	<label for="apellido_pa">Apellido Paterno</label>
            	<input type="text" name="ApellidoPaterno"  class="form-control"  value="{{$categoria->apellido_pa}}{{old('apellido_pa')}}" placeholder="Apellido Paterno...">
            </div>
            </div>


      <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="apellido_ma">Apellido Materno</label>
            	<input type="text" name="ApellidoMaterno"  class="form-control" 
                  value="{{$categoria->apellido_ma}}{{old('apellido_ma')}}"  placeholder="Apellido Materno..">
            </div>
            </div>

            
            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="fecha_naci">Fecha de Nacimiento</label>
            	<input   type="date" name="FechaNacimiento" class="form-control"  
                  value="{{$categoria->fecha_naci}}{{old('fecha_naci')}}"  placeholder="Fecha de Nacimiento..">
            </div>
            </div>


      <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="lugar_naci">Lugar de Nacimiento</label>
            	<input type="text" name="LugarNacimiento"  class="form-control"   value="{{$categoria->lugar_naci}}{{old('lugar_naci')}}"  placeholder="Lugar de Nacimiento...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="pais">Pais</label>
            <input type="text" name="Pais"  class="form-control" 
                  value="{{$categoria->pais}}{{old('pais')}}" placeholder="Pais...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="estado">Estado</label>
            	<input type="text" name="Estado"  class="form-control"  value="{{$categoria->estado}}{{old('estado')}}" placeholder="Estado...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="ciudad">Ciudad</label>
            	<input type="text" name="Ciudad"   class="form-control"   value="{{$categoria->ciudad}}{{old('ciudad')}}" placeholder="Ciudad...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="codigo_postal">Código Postal</label>
            	<input type="number" name="CodigoPostal" class="form-control"  value="{{$categoria->codigo_postal}}{{old('codigo_postal')}}"  placeholder="Código Postal...">
            </div>
            </div>


            <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="colonia">Colonia</label>
            	<input type="text" name="Colonia"  class="form-control" 
                  value="{{$categoria->colonia}}{{old('colonia')}}" placeholder="Colonia...">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">

            <div class="form-group">
            	<label for="calle">Calle</label>
            	<input type="text" name="Calle" class="form-control"  value="{{$categoria->calle}}{{old('calle')}}" 
                  placeholder="Calle...">
            </div>
            </div>


            <div class="col-lg-ms-6 col-md-6 col-xs-12">
              <div class="form-group">
            	<label for="numero_inter">Número Interior</label>
            	<input type="number"  name="NumeroInte" class="form-control" 
                  value="{{$categoria->numero_inter}}{{old('numero_inter')}}"  placeholder="Número Interior...">
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">

            <div class="form-group">
            	<label for="numero_exte">Número Exterior</label>
            	<input type="number"  name="NumeroExte" class="form-control"  
                  value="{{$categoria->numero_exte}}{{old('numero_exte')}}"  placeholder="Número Exterior...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">

             <div class="form-group">
            	<label for="celular">Celular</label>
            	<input   type="number" name="Celular" class="form-control" 
                  value="{{$categoria->celular}}{{old('celular')}}" placeholder="Celular...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">

             <div class="form-group">
            	<label for="lada">Lada</label>
            	<input type="number" name="Lada" class="form-control" 
                  value="{{$categoria->lada}}{{old('lada')}}" placeholder="Lada...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="number" name="Telefono" class="form-control" 
                  value="{{$categoria->telefono}}{{old('telefono')}}" placeholder="Teléfono...">
            </div>
            </div>
           


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

  </div>


			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection