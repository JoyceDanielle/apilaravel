<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Animal extends Model
{
    protected $fillable = [
        'nome', 'raca', 'especie', 'sexo', 'data_nascimento', 'numero_chip',
        'cliente_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class , 'cliente_id');
    }
}
