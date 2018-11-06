<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Servico extends Model
{
    protected $fillable = [
        'laudo', 'tipo', 'preco', 'cliente_id'
    ];

    public function cliente(){
        return $this->hasMany('Cliente', 'servico_id', 'id');
    }

    public function agenda(){
        return $this->belongsTo('Agenda',  'agenda_id');
    }
}
