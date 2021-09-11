@extends ('layouts.admin')
@if(Auth::user()->nivel==1 || Auth::user()->id==$usuario->id)
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Consulta</h3>
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
			{!!Form::model($consulta,['method'=>'PATCH','route'=>['co.consulta.update',$consulta->id_consulta, 'files'=>'true']])!!}
           
            {{Form::token()}}

           <div class="col-lg-ms-6 col-md-6 col-xs-12">
<div class="form-group">
<label for="fecha_consulta">Fecha</label>
                  <input type="date" name="Fecha_consulta" class="form-control" value="{{$consulta->fecha_consulta}}{{old('fecha_consulta')}}" placeholder="Fecha">
            </div>
            </div>    


             <div class="col-lg-ms-6 col-md-6 col-xs-12">
                  <div class="form-group">

            <label for="id_paciente">Paciente</label>
                  <select type="text"  name="Idpaciente" class="form-control"  placeholder="Id Paciente">

                        @foreach($categorias as $cat)
                        @if($cat->id_paciente==$consulta->id_paciente)
                         <option value="{{$cat->id_paciente}}"  selected>{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                         @else
                        <option value="{{$cat->id_paciente}}">{{$cat->nombre}} {{$cat->apellido_pa}} {{$cat->apellido_ma}}</option>
                        @endif
                        @endforeach
                 </select> 
            </div>
            </div>

             <div class="col-lg-ms-6 col-md-6 col-xs-12">
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
                  <textarea type="text" name="Descripcion"   class="form-control"  placeholder="Descripcion"><?php echo $consulta['descripcion'];?></textarea>
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
@else
@section('contenido')
<div class="alert alert-warning" role="alert"><h2>
  <span class="fa fa-exclamation-triangle" aria-hidden="true"></span>
  <span class="sr-only" >Error:</span> Acceso Restringido </h2>
</div>
@endsection
@endif
