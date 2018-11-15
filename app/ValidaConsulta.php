<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidaConsulta extends Model
{
    protected $fillable = [
        'status_agenda', 'data_agenda', 'horario'
    ];

    public function veterinario(){
        return $this->belongsTo('Veterinario', 'veterinario_id');
    }

    public function servico(){
        return $this->hasMany('Agenda', 'agenda_id');
    }
}
