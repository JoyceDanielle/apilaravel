<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Veterinario;

class Clinica extends Model
{
    protected $fillable = [
        'estado', 'cidade', 'numero', 'logradouro', 'cep', 'bairro',
        'complemento', 'telefone', 'login', 'senha', 'tipo',
        'razao_social', 'nome_fantasia', 'cnpj'
    ];

    public function veterinario(){
        return $this->hasMany('Veterinario', 'clinica_id');
    }
}
