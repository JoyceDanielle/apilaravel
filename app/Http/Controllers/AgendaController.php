<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    public function listar(){
        return Agenda::all();
       }
   
       public function listarId($id){
           return Agenda::find($id);
       }
   
       public function salvar(Request $req, $id_veterinario){
           $agenda = new Agenda($req->all());
           $agenda->veterinario_id = $id_veterinario;
           return $agenda->save();
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           return Agenda::find($id)->update($dados);
       }
   
       public function deletar($id){
           return Agenda::find($id)->delete();
       }
}
