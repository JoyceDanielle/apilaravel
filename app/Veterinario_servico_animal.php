<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veterinario_servico_animal extends Model
{
    protected $fillable = [
        'veterinario_id', 'servico_id', 'animal_id'
    ];
}
