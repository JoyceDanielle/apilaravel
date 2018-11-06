<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinario_servico_animal;

class VeterinarioServicoAnimalController extends Controller
{
    public function listar(){
        return Veterinario_servico_animal::all();
       }
   
}
