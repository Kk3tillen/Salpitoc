<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('telaLogin');
    }

    public function cadastrar(Request $request){
        $cliente = Cliente::cadastrar(
            $request->nome, 
            $request->sobrenome,
            $request->email,
            $request->senha,
            $request->confirmarSenha,
            $request->rua,
            $request->cidade,
            $request->numero,
            $request->estado,
            $request->cep
        );
            if($cliente != null){
                return redirect('/');
            }
            return 'Opss... Algo deu errado! :/ Tente novamente!';
    }

    public function autenticar(Request $request){

        $cliente = Cliente::logar($request->email, $request->senha);
        if($cliente){
            return redirect('/');
        }
        return redirect('/cliente/login/formulario')->with('error', true);
    }
    public function cadastrarFormulario(){
        return view("telaCadastro");
    }
    public function loginFormulario(){
        return view("telaLogin");
    } 
    public function verPerfil(){
        return view("perfilUsuario");
    } 
    public function sair(){
        session()->get('cliente')->deslogar();
        return redirect('/');
    }
}
