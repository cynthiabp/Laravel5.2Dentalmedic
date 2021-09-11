@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nuevo paciente</h3>
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

			{!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

           <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text"  name="Nombre"  class="form-control" placeholder="Nombre..." value="{{old('Nombre')}}">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="apellido_pa">Apellido Paterno</label>
            	<input type="text" name="ApellidoPaterno" value="{{old('ApellidoPaterno')}}" class="form-control" placeholder="Apellido Paterno...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="apellido_ma">Apellido Materno</label>
            	<input type="text" name="ApellidoMaterno" value= "{{old('ApellidoMaterno')}}" class="form-control" placeholder="Apellido Materno...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="fecha_naci">Fecha de Nacimiento</label>
            	<input  type="date" name="FechaNacimiento" value= "{{old('FechaNacimiento')}}" class="form-control" placeholder="Fecha de Nacimiento...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="lugar_naci">Lugar de Nacimiento</label>
            	<input type="text" name="LugarNacimiento" value= "{{old('LugarNacimiento')}}" class="form-control" placeholder="Lugar de Nacimiento...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="pais">Pais</label>
            	<input type="text" name="Pais" value= "{{old('Pais')}}"class="form-control" placeholder="Pais...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="estado">Estado</label>
            	<input type="text" name="Estado" value= "{{old('Estado')}}" class="form-control" placeholder="Estado...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="ciudad">Ciudad</label>
            	<input type="text" name="Ciudad" value= "{{old('Ciudad')}}" class="form-control" placeholder="Ciudad...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
            	<label for="codigo_postal">Código Postal</label>
            	<input type="number"  name="CodigoPostal" value= "{{old('CodigoPostal')}}" class="form-control" placeholder="Código Postal...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="colonia">Colonia</label>
            	<input type="text" name="Colonia"  value= "{{old('Colonia')}}" class="form-control" placeholder="Colonia...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="calle">Calle</label>
            	<input type="text" name="Calle" value= "{{old('Calle')}}" class="form-control" placeholder="Calle...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
              <div class="form-group">
            	<label for="numero_inter">Número Interior</label>
            	<input type="number" name="NumeroInte" value= "{{old('NumeroInte')}}" class="form-control" placeholder="Número Interior...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
            	<label for="numero_exte">Número Exterior</label>
            	<input type="number" name="NumeroExte" value= "{{old('NumeroExte')}}" class="form-control"  placeholder="Número Exterior...">
            </div>
            </div>

<div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="celular">Celular</label>
            	<input type="number"   name="Celular" value= "{{old('Celular')}}" class="form-control" placeholder="Celular...">
            </div>
            </div>

<div class="col-lg-ms-4 col-md-4 col-xs-12">

             <div class="form-group">
            	<label for="lada">Lada</label>
            	<input type="number" name="Lada" value= "{{old('Lada')}}" class="form-control" placeholder="Lada...">
            </div>
            </div>

<div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input  type="number"    name="Telefono" value= "{{old('Telefono')}}" class="form-control" placeholder="Teléfono...">
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