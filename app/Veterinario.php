<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clinica;
use App\Agenda;

class Veterinario extends Model
{
    protected $fillable = [
        'estado', 'cidade', 'numero', 'logradouro', 'cep', 'bairro',
        'complemento', 'telefone', 'login', 'senha', 'tipo',
        'nome', 'sobrenome', 'sexo', 'cpf', 'crmv', 'data_nascimento',
        'clinica_id', 'agenda_id'
    ];

    public function clinica(){
        return $this->belongsTo('Clinica', 'clinica_id');
    }

    public function agenda(){
        return $this->hasOne('Agenda', 'veterinario_id', 'id');
    }

}
