<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  public function index(Request $request)
  {
    //  $usuarios = Usuarios::all();
    $usuarios = Usuarios::query()->orderBy('id')->get();
    $mensagem = $request->session()->get('mensagem');
    return view('usuarios.home', [
      'usuarios' => $usuarios,
      'mensagem' => $mensagem
    ]);
  }

  public function store(Request $request)
  {

    $nome = $request->nome;
    $email = $request->email;
    $telefone = $request->telefone;
    $endereco = $request->endereco;
    $cidade = $request->cidade;
    $complemento = $request->complemento;
    $dt_nascimento = $request->dt_nascimento;
    $dt_batismo = $request->dt_batismo;
    $dt_conversao = $request->dt_conversao;
    $genero = $request->genero;

    $usuario = new Usuarios();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->telefone = $telefone;
    $usuario->endereco = $endereco;
    $usuario->cidade = $cidade;
    $usuario->complemento = $complemento;
    $usuario->dt_nascimento = $dt_nascimento;
    $usuario->dt_batismo = $dt_batismo;
    $usuario->dt_conversao = $dt_conversao;
    $usuario->genero = $genero;
    $usuario->save();
    $request->session()->flash('mensagem', "Usuário {$usuario->nome} cadastrado com Sucesso!");
    return redirect('/usuarios');
  }

  public function edit(Request $request)
  {

    $id = $request->id;

    $usuario = Usuarios::find($id);

    if (isset($usuario)) {
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
}
