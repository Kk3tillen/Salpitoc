<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco',
            'verificado'];

    public static function buscarProdutos(){

        //return Lista de Produtos 

    }

    public function detalharProduto(){
        
        //return produto

    }


}
