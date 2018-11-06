<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Animal;
use App\Servico;

class Cliente extends Model
{
    protected $fillable = [
        'estado', 'cidade', 'numero', 'logradouro', 'cep',
        'bairro', 'complemento', 'telefone', 
        'login', 'senha', 'tipo', 'nome', 'sobrenome', 'sexo',
        'data_nascimento', 'cpf'
    ];

    protected $hidden = [
        'tipo'
    ];
    

    public function animal(){
        return $this->hasMany('Animal', 'cliente_id', 'id');
    }

    public function servico(){
        return $this->belongsTo('Servico', 'cliente_id');
    }
}
