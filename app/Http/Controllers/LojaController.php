<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function mostrarTelaInicial(){
        return view('telaInicial');
    }

    public function adicionarProdutos(){
        return view('addProduto');
    }
    public function verCompras(){
        return view('compras');
    }
    public function areaDoacoes(){
        return view('doacao');
    }
}
