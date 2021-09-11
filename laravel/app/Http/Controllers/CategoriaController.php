<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;


class CategoriaController extends Controller
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
            $categorias=DB::table('paciente')->where('nombre','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('id_paciente','desc')
            ->paginate(7);
            return view('almacen.categoria.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("almacen.categoria.create");
    }
    public function store (CategoriaFormRequest $request)
    {
        $categoria=new Categoria;
       

 $categoria->nombre=$request->get('Nombre');
        $categoria->apellido_pa=$request->get('ApellidoPaterno');
        $categoria->apellido_ma=$request->get('ApellidoMaterno');
        $categoria->fecha_naci=$request->get('FechaNacimiento');
        $categoria->lugar_naci=$request->get('LugarNacimiento');
        $categoria->pais=$request->get('Pais');
        $categoria->estado=$request->get('Estado');
        $categoria->ciudad=$request->get('Ciudad');
       $categoria->codigo_postal=$request->get('CodigoPostal');
        $categoria->colonia=$request->get('Colonia');
        $categoria->calle=$request->get('Calle');
        $categoria->numero_inter=$request->get('NumeroInte');
        $categoria->numero_exte=$request->get('NumeroExte');
        $categoria->celular=$request->get('Celular');
        $categoria->lada=$request->get('Lada');
        $categoria->telefono=$request->get('Telefono');
        $categoria->condicion='1';
        $categoria->save();
        return Redirect::to('almacen/categoria');

    }
    public function show($id)
    {
        return view("almacen.categoria.show",["categoria"=>Categoria::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("almacen.categoria.edit",["categoria"=>Categoria::findOrFail($id)]);
    }
    
   
    public function update(CategoriaFormRequest $request,$id)
    {
        $categoria=Categoria::findOrFail($id);
      

$categoria->nombre=$request->get('Nombre');

        $categoria->apellido_pa=$request->get('ApellidoPaterno');
        $categoria->apellido_ma=$request->get('ApellidoMaterno');
        $categoria->fecha_naci=$request->get('FechaNacimiento');
        $categoria->lugar_naci=$request->get('LugarNacimiento');
        $categoria->pais=$request->get('Pais');
        $categoria->estado=$request->get('Estado');
        $categoria->ciudad=$request->get('Ciudad');
       $categoria->codigo_postal=$request->get('CodigoPostal');
        $categoria->colonia=$request->get('Colonia');
        $categoria->calle=$request->get('Calle');
        $categoria->numero_inter=$request->get('NumeroInte');
        $categoria->numero_exte=$request->get('NumeroExte');
        $categoria->celular=$request->get('Celular');
        $categoria->lada=$request->get('Lada');
        $categoria->telefono=$request->get('Telefono');




        $categoria->update();
        return Redirect::to('almacen/categoria');
    }
    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }

    
}
