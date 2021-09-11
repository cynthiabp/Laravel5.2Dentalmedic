@extends ('layouts.admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3>Datos de la Consulta</h3>
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
{!!Form::model($consulta,['method'=>'PATCH','route'=>['co.consulta.update',$consulta->id_consulta]])!!}
            {{Form::token()}}


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
              <div class="form-group">
                <label for="fecha_consulta">Fecha</label>
                  <input type="date" disabled="" name="Fecha_consulta" class="form-control" value="{{$consulta->fecha_consulta}}" placeholder="Fecha">
              </div>
              </div>

               <div class="col-lg-ms-4 col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="id_paciente">Paciente</label>
                  <input type="text"  disabled="" name="Idpaciente" class="form-control"  placeholder="Id Paciente" value="{{$consulta->paciente." ".$consulta->apellido_pa." ".$consulta->apellido_ma}}" >

            </div>
            </div>
            
            <div class="col-lg-ms-4 col-md-4 col-xs-12">
                  <div class="form-group">
                  <label for="id_tratamiento">Tratamiento</label>
                  <input type="text"  disabled="" name="Idtratamiento" class="form-control"  placeholder="Id tratamiento" value="{{$consulta->tratamiento}}" >

            </div>
            </div>


          

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label for="descripcion">Descripción</label>
              <input  type="text" name="Descripcion" disabled="" value="{{$consulta->descripcion}}" class="form-control" placeholder="Descripción...">
            </div>
            </div>

           

                
           

           


                  {!!Form::close()!!}           
            
            </div>
      </div>
@endsection