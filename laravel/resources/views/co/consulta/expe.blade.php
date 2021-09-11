@extends ('layouts.admin')
@section ('contenido')

	

		
			<div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                
                <h4>Expediente</h4>



		<div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="form-group">
              <label for="id_paciente">Folio</label>
              <input type="text" disabled=""  name="Idpaciente"  class="form-control" placeholder="Folio" value="{{$categoria->id_paciente}}">
            </div>
          </div>
          </div>
          </div>
          </div>
          


            
            <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                
                <h4>Paciente</h4>

                  

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" disabled=""  name="Nombre"  class="form-control" placeholder="Nombre..." value="{{$categoria->nombre}}">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="apellido_pa">Apellido Paterno</label>
              <input type="text" disabled="" name="ApellidoPaterno" value="{{$categoria->apellido_pa}}" class="form-control" placeholder="Apellido Paterno...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="apellido_ma">Apellido Materno</label>
              <input type="text" disabled="" name="ApellidoMaterno" value= "{{$categoria->apellido_ma}}" class="form-control" placeholder="Apellido Materno...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="fecha_naci">Fecha de Nacimiento</label>
              <input  type="date" disabled="" name="FechaNacimiento" value= "{{$categoria->fecha_naci}}" class="form-control" placeholder="Fecha de Nacimiento...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="lugar_naci">Lugar de Nacimiento</label>
              <input type="text" disabled="" name="LugarNacimiento" value= "{{$categoria->lugar_naci}}" class="form-control" placeholder="Lugar de Nacimiento...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="pais">Pais</label>
              <input type="text" name="Pais" disabled="" value= "{{$categoria->pais}}" class="form-control" placeholder="Pais...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="estado">Estado</label>
              <input type="text" name="Estado" disabled="" value= "{{$categoria->estado}}" class="form-control" placeholder="Estado...">
            </div>
            </div>


            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="ciudad">Ciudad</label>
              <input type="text" name="Ciudad" disabled="" value= "{{$categoria->ciudad}}" class="form-control" placeholder="Ciudad...">
            </div>
            </div>

            <div class="col-lg-ms-4 col-md-4 col-xs-12">
            <div class="form-group">
              <label for="codigo_postal">Código Postal</label>
              <input type="number" disabled="" name="CodigoPostal" value= "{{$categoria->codigo_postal}}" class="form-control" placeholder="Código Postal...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label for="colonia">Colonia</label>
              <input type="text" disabled="" name="Colonia"  value= "{{$categoria->colonia}}" class="form-control" placeholder="Colonia...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label for="calle">Calle</label>
              <input type="text" disabled="" name="Calle" value= "{{$categoria->calle}}" class="form-control" placeholder="Calle...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
              <div class="form-group">
              <label for="numero_inter">Número Interior</label>
              <input type="number" disabled="" name="NumeroInte" value= "{{$categoria->numero_inter}}" class="form-control" placeholder="Número Interior...">
            </div>
            </div>


  <div class="col-lg-ms-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label for="numero_exte">Número Exterior</label>
              <input type="number" disabled="" name="NumeroExte" value= "{{$categoria->numero_exte}}" class="form-control"  placeholder="Número Exterior...">
            </div>
            </div>

<div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
              <label for="celular">Celular</label>
              <input type="number" disabled=""  name="Celular" value= "{{$categoria->celular}}" class="form-control" placeholder="Celular...">
            </div>
            </div>

      <div class="col-lg-ms-4 col-md-4 col-xs-12">

             <div class="form-group">
              <label for="lada">Lada</label>
              <input type="number" disabled="" name="Lada" value= "{{$categoria->lada}}" class="form-control" placeholder="Lada...">
            </div>
            </div>

      <div class="col-lg-ms-4 col-md-4 col-xs-12">
             <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input  type="number"  disabled=""  name="Telefono" value= "{{$categoria->telefono}}" class="form-control" placeholder="Teléfono...">
            </div>
            </div>

             </div>
            </div>
             </div>



             <div class="col-lg-ms-12 col-md-12 col-xs-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                
                <h4>Consultas</h4>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="table-resposive">
			<table class="table table-striped table-bordered table-condesed tabe-hover">
				<thead >
					
					<th>Fecha Consulta</th>
					<th>Tratamiento</th>	
					<th>Descripción</th>							
					
				</thead>
				@foreach ($consultas as $co)
				
				<tr>
					
					<td>{{$co->fecha_consulta}}</td>
					<td>{{$co->tratamiento}}</td>
					<td>{{$co->descripcion}}</td>
                   	</tr>
              
                @endforeach
                
				</table>
			</div>
			
		</div>

	</div>

		</div>
			
		</div>

	</div>














          {!!Form::close()!!}     

@endsection