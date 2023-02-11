<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(Request $request){
        $email = $request->email;
        $senha = $request->senha;
        $confirmacao = $request->confirmacao;

        $novo = Cliente::criarUsuario($email, $senha, $confirmacao);

        if($novo == null){
            return redirect("/registro")->with('msg', 'Bem vindo ao Salpitoc');
        } else {
            return redirect("/login")->with('msg', 'Bem vindo ao Salpitoc');
        }
    }
}
