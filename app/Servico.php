<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Servico extends Model
{
    protected $fillable = [
        'laudo', 'tipo', 'tempo','preco', 'cliente_id'
    ];

    public function cliente(){
        return $this->hasMany('Cliente', 'servico_id', 'id');
    }

    public function agenda(){
        return $this->belongsTo('Agenda',  'agenda_id');
    }

    public function validaConsulta(){
        return $this->belongsTo('ValidaConsulta',  'valida_consulta_id');
    }
}
