<?php

namespace App\Http\Controllers;

use App\Exports\UsuariosExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuariosFormRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsuariosController extends Controller
{
  public function index(Request $request)
  {
      $usuarios = Usuarios::paginate(5);
      $mensagem = $request->session()->get('mensagem');
      $request->session()->forget('mensagem');

      return view('usuarios.home', [
        'usuarios' => $usuarios,
        'mensagem' => $mensagem,
      ]);
  }

  public function export(){
    return Excel::download(new UsuariosExport,'usuarios.xlsx');
  }

  public function store(UsuariosFormRequest $request){
    
      $usuario = Usuarios::create($request->all());
      $request->session()->put('mensagem', "Usuário {$usuario->nome} cadastrado com Sucesso!");
      return redirect('usuarios');
  }

  public function edit(Request $request)
  {

      $id = $request->id;
      $usuario = Usuarios::find($id);

    if(isset($usuario)) {
        $request->session()->put('mensagem', "Usuário {$usuario->nome} Editado com Sucesso!");
        return view('usuarios.edit', [
        'usuarios' => $usuario,
      ]);
    }

    return view('usuarios');
  }

  public function update(Request $request, $id)
  {
      $usuario = new Usuarios();
      $usuario = Usuarios::find($id);
      $usuario->update($request->all());

    return redirect('usuarios');
  }

  public function delete(Request $request){
    
      $usuario = Usuarios::find($request->id);
      $id = $usuario->id;

    if($id){

      Usuarios::destroy($id);
      $request->session()->put('mensagem', "Usuário {$request->nome} excluído com Sucesso!");

      return redirect('usuarios');
    } 
  }
}
