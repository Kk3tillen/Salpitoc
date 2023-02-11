<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['numero', 'rua','cidade', 'estado',  'cep'];
    protected $hidden = ['numero', 'rua', 'cidade', 'estado',  'cep']; 

    public function cliente(){
        return $this->hasOne(Cliente::class);
    }

}
