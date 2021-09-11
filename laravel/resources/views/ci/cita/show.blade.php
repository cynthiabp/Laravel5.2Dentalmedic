@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3>Datos de la Cita</h3>
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
                  <input type="date" disabled="" name="Fecha" class="form-control" value="{{$cita->fecha}}" placeholder="Fecha">
              </div>
              </div>


              <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                  <label for="horainicio">Hora inicio</label>
                  <input type="time" disabled="" name="Horainicio" class="form-control" value="{{$cita->horainicio}}" placeholder="Hora inicio">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
                  <label for="horafin">Hora fin</label>
                  <input type="time" disabled="" name="Horafin" class="form-control" value="{{$cita->horafin}}" placeholder="Hora fin">
            </div>
            </div>

               <div class="col-lg-ms-12 col-md-12  col-xs-12">
            
            <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input  type="text" name="Descripcion" disabled="" value="{{$cita->descripcion}}"   class="form-control"  placeholder="Descripcion">
            </div>
            </div>
       

            

                 <div class="col-lg-ms-12 col-md-12  col-xs-12">
                  <div class="form-group">
                  <label for="id_paciente">Paciente</label>
                  <input type="text"  disabled="" name="Idpaciente" class="form-control"  placeholder="Id Paciente" value="{{$cita->paciente." ".$cita->apellido_pa." ".$cita->apellido_ma}}" >

            </div>
            </div>


                
                <div class="col-lg-ms-4 col-md-4 col-xs-12">
              <div class="form-group">
                  <label for="celular">Celular</label>
                  <input type="number" disabled="" name="Celular"   class="form-control" value="{{$cita->celular}}" placeholder="Celular">
            </div>
            </div>
           


              <div class="col-lg-ms-4 col-md-4 col-xs-12">
              <div class="form-group">
                  <label for="lada">Lada</label>
                  <input type="number" disabled="" name="Lada"   class="form-control" value="{{$cita->lada}}" placeholder="Lada">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            
            <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="number" disabled="" name="Telefono"   class="form-control" value="{{$cita->telefono}}" placeholder="Teléfono">
            </div>
            </div>

            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                <h4>Cita de primera vez</h4>
                
             <div class="col-lg-ms-6 col-md-6 col-xs-12">
           <div class="form-group">
            <label for="nombre">Nombre</label>
                  <input  type="text" disabled="" name="Nombre"  value="{{$cita->nombre}}{{old('nombre')}}" class="form-control" placeholder="Nombre del paciente Primera vez...">
                
            </div>
            </div>

            <div class="col-lg-ms-6 col-md-6 col-xs-12">
             <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input  type="number" disabled=""   name="Telefono" value="{{$cita->telepaci}}" class="form-control" placeholder="Teléfono del paciente Primera vez...">
            </div>
            </div>

             </div>
            </div>
             </div>
            



           

           


                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection