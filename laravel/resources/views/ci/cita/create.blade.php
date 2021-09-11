@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Nueva Cita</h3>
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

			{!!Form::open(array('url'=>'ci/cita','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
           
           <div class="col-lg-ms-4 col-md-4 col-xs-12">
           <div class="form-group">


            <label for="fecha">Fecha</label>
                  <input type="date" name="Fecha" value="{{old('Fecha')}}" class="form-control" placeholder="Fecha...">
            </div>
            </div>



            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                  <label for="horainicio">Hora inicio</label>
                  <input type="time" min=”09:00:00″ name="Horainicio" value="{{old('Horainicio')}}" class="form-control" placeholder="Hora de inicio...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
              <div class="form-group">
                  <label for="horafin">Hora fin</label>
                  <input type="time" min=”21:00:00 name="Horafin" value="{{old('Horafin')}}" class="form-control" placeholder="Hora de fin..">
            </div>
            </div>


            
            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea type="text" name="Descripcion" value="{{old('Descripcion')}}" class="form-control" placeholder="Descripción..."></textarea>
            </div>
             </div>


            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">

            <label for="id_paciente">Paciente</label>
                  <select type="text" name="Idpaciente" class="form-control selectpicker" data-live-search="true" placeholder="Id Paciente">
                  	@foreach($categorias as $cat)
                  	<option value="{{$cat->id_paciente}}">{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                  	@endforeach
                 </select> 
            </div>
            </div>

             <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">

                  <h4>Cita de primera vez</h4>

               <div class="col-lg-ms-6 col-md-6 col-xs-12">
           <div class="form-group">
            <label for="nombre">Nombre</label>
                  <input  type="text" name="Nombre"  value="{{old('Nombre')}}" class="form-control" placeholder="Nombre del paciente Primera vez...">
                
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
             <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input  type="number"    name="Telefono" value= "{{old('Telefono')}}" class="form-control" placeholder="Teléfono del paciente Primera vez...">
            </div>
            </div>

            
            </div>
            </div>
          </div>
            
           

           
           

            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
                <br>
                <br>
                
            </div>
             </div>


         <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                <br>
                
                     <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                          <label for="id_cita"> Busqueda de Citas</label> 
                         
                
                     <select type="text" name="id_cita" class="form-control selectpicker" data-live-search="true"">
                    @foreach($citas as $ci)
                   <option value="{{$ci->id_cita}}">{{$ci->fecha}} {{$ci->horainicio}} {{$ci->horafin}}</option>

                    @endforeach
                 </select> 
                          
                      <br>
                <br>
                <br>
                  </div>


                </div>

                 
                </div>
            </div>
          </div>

           


			{!!Form::close()!!}		
            
		</div>
	</div>
  
@endsection