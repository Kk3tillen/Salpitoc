<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'sobrenome','email','senha'];
    protected $hidden = ['senha'];

    public function endereco(){
        return $this->belongsTo(Endereco::class);
    }
    

    public static function cadastrar($nome, $sobrenome, $email, $senha, $confirmarSenha, $rua, $cidade, $numero, $estado, $cep){
        if($senha == $confirmarSenha){
            $cliente = new Cliente([
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'senha' => Hash::make($senha)
            ]);
            $endereco = new Endereco([
                'numero' => $numero,
                'rua' => $rua,
                'cidade' => $cidade,
                'estado' => $estado,
                'cep' => $cep
            ]);

            $endereco->save();
            $endereco->cliente()->save($cliente);
            return $cliente;
        }
        return null;
    }

    public static function logar($email, $senha){   
        $cliente = Cliente::where('email', $email)->first();

        if($cliente != null && Hash::check($senha, $cliente->senha)){
            session()->put('cliente', $cliente);
            return true;
        }
        return false;
    }

    public function deslogar(){
        session()->forget('cliente');
    }
}
