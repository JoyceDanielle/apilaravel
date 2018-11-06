<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinario;

class VeterinarioController extends Controller
{
    public function listar(){
        return Veterinario::all();
       }
   
       public function listarId($id){
           return Veterinario::find($id);
       }
   
       public function salvar(Request $req, $id_clinica){

           $veterinario = new Veterinario($req->all());
           $veterinario->clinica_id = $id_clinica;

           return $veterinario->save();
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           return Veterinario::find($id)->update($dados);
       }
   
       public function deletar($id){
           return Veterinario::find($id)->delete();
       }
}
