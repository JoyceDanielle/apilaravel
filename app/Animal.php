<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Animal extends Model
{
    protected $fillable = [
        'nome', 'raca', 'especie', 'sexo', 'data_nascimento',
        'cliente_id'
    ];

    public function cliente(){
        return $this->belongsTo('Cliente', 'cliente_id');
    }
}
