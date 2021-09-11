<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Cita;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisVentas\Http\Requests\CitaFormRequest;
use DB;


class CitaController extends Controller
{ public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $citas=DB::table('cita as c')
            
            ->join('paciente as p','c.id_paciente','=','p.id_paciente')
            
            ->select('c.id_cita','c.nombre','c.fecha','c.horainicio','c.horafin','c.telefono','c.descripcion','c.condicion','p.nombre as paciente','p.apellido_pa','p.apellido_ma')
            
            ->where('c.fecha','LIKE','%'.$query.'%')
            ->where('c.condicion','=','1')
          //->orwhere('p.nombre','LIKE','%'.$query.'%')
          //->orwhere('p.condicion','=','1')
            ->orderBy('id_cita','desc')
            ->paginate(7);
            return view('ci.cita.index',["citas"=>$citas,"searchText"=>$query]);
        }
        
    }
    public function create()

     {
        $citas=DB::table('cita')->where('condicion','=','1')->get();
        $categorias=DB::table('paciente')->where('condicion','=','1')->get();
        
        return view('ci.cita.create',["citas"=>$citas,"categorias"=>$categorias]);

    }
    public function store (CitaFormRequest $request)
    {
             
                 $cita=new Cita;    
        $cita->id_paciente=$request->get('Idpaciente');
        $cita->nombre=$request->get('Nombre');        
        $cita->fecha=$request->get('Fecha');
        $cita->horainicio=$request->get('Horainicio');
        $cita->horafin=$request->get('Horafin');
        $cita->telefono=$request->get('Telefono');
        $cita->descripcion=$request->get('Descripcion');
        $cita->condicion='1';
        $cita->save();
        return Redirect::to('ci/cita');



    }
    public function show($id)
    {
           $citas=DB::table('cita as c')

          ->join('paciente as p','c.id_paciente','=','p.id_paciente')
            ->select('c.id_cita','c.nombre','c.fecha','c.horainicio','c.horafin','c.telefono as telepaci','c.descripcion','p.nombre as paciente','p.apellido_pa','p.apellido_ma','p.celular','p.lada','p.telefono')
            ->where('c.id_cita','=',$id)
            ->first();


             return view('ci.cita.show',["cita"=>$citas]);


        //$cita=Cita::findOrFail($id);
        //$categorias=DB::table('paciente')->where('condicion','=','1')->get();
        
        //return view('ci.cita.show',["cita"=>$cita]);

    }
    public function edit($id)
 {

        $cita=Cita::findOrFail($id);
        $categorias=DB::table('paciente')->where('condicion','=','1')->get();
         

        return view('ci.cita.edit',["cita"=>$cita,"categorias"=>$categorias]);
    }
    public function update(CitaFormRequest $request,$id)
    {
        $cita=Cita::findOrFail($id);
        $cita->id_paciente=$request->get('Idpaciente');
        $cita->nombre=$request->get('Nombre');       
        $cita->fecha=$request->get('Fecha');
        $cita->horainicio=$request->get('Horainicio');
        $cita->horafin=$request->get('Horafin');
        $cita->telefono=$request->get('Telefono');
        $cita->descripcion=$request->get('Descripcion');
        $cita->update();
        return Redirect::to('ci/cita');
    }
    public function destroy($id)
    {
       // $cita=DB::table('cita')
        //->where('id_cita','=',$id)
        //->delete();
        $cita=Cita::findOrFail($id);
        $cita->condicion='0';
       $cita->update();
        return Redirect::to('ci/cita');
    }
}
