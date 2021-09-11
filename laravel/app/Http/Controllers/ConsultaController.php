<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Consulta;
use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisVentas\Http\Requests\ConsultaFormRequest;
use DB;

class ConsultaController extends Controller
{
    
    
     public function __construct()
    {
        $this->middleware('auth');
    }

     public function index(Request $request){
   	if ($request) {
   		   $query=trim($request->get('searchText'));
   		   $consultas=DB::table('consulta as co')

   		  ->join('paciente as p','co.id_paciente','=','p.id_paciente')
          ->join('tratamiento as tra','co.id_tratamiento','=','tra.id_tratamiento')
            
            
            ->select('co.id_consulta','co.fecha_consulta','co.descripcion','p.nombre as paciente','p.apellido_pa','p.apellido_ma','p.fecha_naci','p.lugar_naci','p.pais','p.estado','p.ciudad','p.codigo_postal','p.colonia','p.calle','p.numero_inter','p.numero_exte','p.celular','p.lada','p.telefono','tra.nombre as tratamiento')
            
            ->where('co.fecha_consulta','LIKE','%'.$query.'%')
            ->where('co.condicion','=','1')
          //->orwhere('p.nombre','LIKE','%'.$query.'%')
          //->orwhere('p.condicion','=','1')
            ->orderBy('id_consulta','desc')
            ->paginate(7);
        return view('co.consulta.index',["consultas"=> $consultas,"searchText"=>$query]);
   	}
   }

   public function create()
    {
    	
        $categorias=DB::table('paciente')->where('condicion','=','1')->get();
       $tratamientos=DB::table('tratamiento')->where('condicion','=','1')->get();
        return view('co.consulta.create',["categorias"=>$categorias,"tratamientos"=>$tratamientos]);


    }


        public function store (ConsultaFormRequest $request)
    {
             $consulta=new Consulta;
             
             $consulta->id_paciente=$request->get('Idpaciente');
             $consulta->id_tratamiento=$request->get('Idtratamiento');
             $consulta->fecha_consulta=$request->get('Fecha_consulta');
             $consulta->descripcion=$request->get('Descripcion');
             $consulta->condicion='1';
             $consulta->save();

        return Redirect::to('co/consulta');
    }

         public function show($id){
                 $consultas=DB::table('consulta as co')

          ->join('paciente as p','co.id_paciente','=','p.id_paciente')
          ->join('tratamiento as tra','co.id_tratamiento','=','tra.id_tratamiento')

            ->select('co.id_consulta','co.fecha_consulta','co.descripcion','p.nombre as paciente','p.apellido_pa','p.apellido_ma','p.fecha_naci','p.lugar_naci','p.pais','p.estado','p.ciudad','p.codigo_postal','p.colonia','p.calle','p.numero_inter','p.numero_exte','p.celular','p.lada','p.telefono','tra.nombre as tratamiento')
            ->where('co.id_consulta','=',$id)
            ->first();


             return view('co.consulta.show',["consulta"=>$consultas]);



     	//	$consulta=Consulta::findOrFail($id);

     	// $categorias=DB::table('paciente')->where('condicion','=','1')->get();
       
       // return view('co.consulta.show',["consulta"=>$consulta,"categorias"=>$categorias]);
    }

    public function expe($id){
          $consultas=DB::table('consulta as co')

          ->join('paciente as p','co.id_paciente','=','p.id_paciente')
          ->join('tratamiento as tra','co.id_tratamiento','=','tra.id_tratamiento')

            ->select('co.id_consulta','co.fecha_consulta','co.descripcion','p.id_paciente','p.nombre as paciente','p.apellido_pa','p.apellido_ma','p.fecha_naci','p.lugar_naci','p.pais','p.estado','p.ciudad','p.codigo_postal','p.colonia','p.calle','p.numero_inter','p.numero_exte','p.celular','p.lada','p.telefono','tra.nombre as tratamiento')
            ->where('co.id_consulta','=',$id)
            ->first();


             return view('co.consulta.edit',["consulta"=>$consultas]);

    }



    public function edit($id) {

      $categoria=Categoria::findOrFail($id);
      $consultas=DB::table('consulta as co')
      ->join('tratamiento as tra','co.id_tratamiento','=','tra.id_tratamiento')
      ->select('co.id_consulta','co.fecha_consulta','co.descripcion','tra.nombre as tratamiento')
      ->where('id_paciente','=',$id)->get();

     
        return view('co.consulta.expe',["categoria"=>$categoria,"consultas"=>$consultas]);












    		// $consulta=Consulta::findOrFail($id);
      //       $categorias=DB::table('paciente')->where('condicion','=','1')->get();
      //  $tratamientos=DB::table('tratamiento')->where('condicion','=','1')->get();
        // return view('co.consulta.edit',["categorias"=>$categorias,"tratamientos"=>$tratamientos]);

         // $consultas=DB::table('consulta as co')

         //  ->join('paciente as p','co.id_paciente','=','p.id_paciente')
         //  ->join('tratamiento as tra','co.id_tratamiento','=','tra.id_tratamiento')

         //    ->select('co.id_consulta','co.fecha_consulta','co.descripcion','p.nombre as paciente','p.apellido_pa','p.apellido_ma','p.fecha_naci','p.lugar_naci','p.pais','p.estado','p.ciudad','p.codigo_postal','p.colonia','p.calle','p.numero_inter','p.numero_exte','p.celular','p.lada','p.telefono','tra.nombre as tratamiento')
         //    ->where('co.id_paciente','=',$id)
         //    ->first();


         //     return view('co.consulta.expe',["consulta"=>$consultas]);

    	
    }
    public function update(ConsultaFormRequest $request,$id)    
    {
             $consulta=Consulta::findOrFail($id);
             $consulta->id_paciente=$request->get('Idpaciente');
             $consulta->id_tratamiento=$request->get('Idtratamiento');
             $consulta->fecha_consulta=$request->get('Fecha_consulta'); 
             $consulta->descripcion=$request->get('Descripcion');
             $consulta->save();

        return Redirect::to('co/consulta');
    }
    public function destroy($id)
    {
            $consulta=Consulta::findOrFail($id);
               $consulta->condicion='0';
               $consulta->update();
         return Redirect::to('co/consulta');
    }



}




