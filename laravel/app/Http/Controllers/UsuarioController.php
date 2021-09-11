<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\User;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
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
            $usuarios=DB::table('users')->where('name','LIKE','%'.$query.'%')
            
            ->orderBy('id','desc')
            ->paginate(7);
            return view('usu.usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("usu.usuario.create");
    }
    public function store (UsuarioFormRequest $request)
    {
        $usuario=new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password')); 
        $usuario->nivel=$request->get('nivel');     
        $usuario->save();
        return Redirect::to('usu/usuario');

    }
    public function show($id)
    {
        return view("usu.usuario.show",["usuario"=>User::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("usu.usuario.edit",["usuario"=>User::findOrFail($id)]);
    }
    public function update(UsuarioFormRequest $request,$id)
    {
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));  
        $usuario->nivel=$request->get('nivel');
        $usuario->update();
        return Redirect::to('usu/usuario');
    }
    public function destroy($id)
    {
        $usuario=DB::table('users')
        ->where('id','=', $id)->delete();
        return Redirect::to('usu/usuario');
    }




}
