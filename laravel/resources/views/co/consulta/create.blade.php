
@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Consulta</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
		</div>
			{!!Form::open(array('url'=>'co/consulta','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
           
            {{Form::token()}}

                <div class="col-lg-ms-4 col-md-4 col-xs-12">
           <div class="form-group">
            	 <label for="fecha_consulta">Fecha</label>
                  <input type="date" name="Fecha_consulta" value="{{old('Fecha_consulta')}}" class="form-control" placeholder="Fecha...">
            </div>
            </div>


             <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">

            <label for="id_paciente">Paciente</label>
                  <select type="text" name="Idpaciente" class="form-control selectpicker" data-live-search="true" placeholder="Id Paciente">
                  	@foreach($categorias as $cat)
                  	<option value="{{$cat->id_paciente}}">{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                  	@endforeach
                 </select> 
            </div>
            
            </div>

             <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">

            <label for="id_tratamiento">tratamiento</label>
                  <select type="text" name="Idtratamiento" class="form-control selectpicker" data-live-search="true" placeholder="Id tratamiento">
                    @foreach($tratamientos as $tra)
                    <option value="{{$tra->id_tratamiento}}">{{$tra->nombre}}</option>
                    @endforeach
                 </select> 
            </div>
            
            </div>

             
            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" name="Descripcion" value="{{old('Descripcion')}}" class="form-control" placeholder="Descripción...">
            </div>
             </div>



           

          <div class="col-lg-ms-12 col-md-12 col-xs-12">
              <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
                     </div>
                </div>       
          
           

			{!!Form::close()!!}		
            
	
@endsection
