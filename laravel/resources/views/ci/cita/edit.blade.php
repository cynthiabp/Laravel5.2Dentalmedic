@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Cita </h3>
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

			{!!Form::model($cita,['method'=>'PATCH','route'=>['ci.cita.update',$cita->id_cita]])!!}
            {{Form::token()}}



<div class="col-lg-ms-4 col-md-4 col-xs-12">
<div class="form-group">
<label for="fecha">Fecha</label>
                  <input type="date" name="Fecha" class="form-control" value="{{$cita->fecha}}{{old('fecha')}}" placeholder="Fecha">
            </div>
            </div>



            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                  <label for="horainicio">Hora Inicio</label>
                  <input type="time" name="Horainicio" class="form-control" value="{{$cita->horainicio}}{{old('horainicio')}}" placeholder="Hora">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
                  <label for="horafin">Hora Fin</label>
                  <input type="time" name="Horafin" class="form-control" value="{{$cita->horafin}}{{old('horafin')}}" placeholder="Hora">
            </div>
            </div>


            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea type="text" name="Descripcion"   class="form-control"  placeholder="Descripcion"><?php echo $cita['descripcion'];?></textarea>
            </div>
            </div>


            <div class="col-lg-ms-12 col-md-12 col-xs-12">
                  <div class="form-group">

            <label for="id_paciente">Paciente</label>
                  <select type="text"  name="Idpaciente" class="form-control"  placeholder="Id Paciente">

                        @foreach($categorias as $cat)
                        @if($cat->id_paciente==$cita->id_paciente)
                         <option value="{{$cat->id_paciente}}"  selected>{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                         @else
                        <option value="{{$cat->id_paciente}}">{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                        @endif
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
                  <input  type="text" name="Nombre"  value="{{$cita->nombre}}{{old('nombre')}}" class="form-control" placeholder="Nombre del paciente Primera vez...">
                
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
             <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input  type="number"    name="Telefono" value= "{{$cita->telefono}}{{old('telefono')}}" class="form-control" placeholder="Teléfono del paciente Primera vez...">
            </div>
            </div>
              
            </div>
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