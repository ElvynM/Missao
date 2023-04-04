<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuarios;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{ 
   public function index(){
    $usuarios = Usuarios::all();
     return view('usuarios.home',[
      'series' => $usuarios
     ]);
   }

   public function create(){
      
   }
   
   public function store(Request $request){

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

   }
}
