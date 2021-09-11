<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

use sisVentas\Tratamiento;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\TratamientoFormRequest;
use DB;

class TratamientoController extends Controller
{
   

 
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $tratamientos=DB::table('tratamiento')->where('nombre','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('id_tratamiento','desc')
            ->paginate(7);
            return view('trata.tratamiento.index',["tratamientos"=>$tratamientos,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("trata.tratamiento.create");
    }
    public function store (TratamientoFormRequest $request)
    {
        $tratamiento=new Tratamiento;
       

 $tratamiento->nombre=$request->get('Nombre');
        $tratamiento->precio=$request->get('Precio');
       
        
        $tratamiento->condicion='1';
        $tratamiento->save();
        return Redirect::to('trata/tratamiento');

    }
    public function show($id)
    {
        return view("trata.tratamiento.show",["tratamiento"=>Tratamiento::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("trata.tratamiento.edit",["tratamiento"=>Tratamiento::findOrFail($id)]);
    }
    public function update(TratamientoFormRequest $request,$id)
    {
        $tratamiento=Tratamiento::findOrFail($id);
      

$tratamiento->nombre=$request->get('Nombre');
        $tratamiento->precio=$request->get('Precio');
        




        $tratamiento->update();
        return Redirect::to('trata/tratamiento');
    }
    public function destroy($id)
    {
        $tratamiento=Tratamiento::findOrFail($id);
        $tratamiento->condicion='0';
        $tratamiento->update();
        return Redirect::to('trata/tratamiento');
    }





}
