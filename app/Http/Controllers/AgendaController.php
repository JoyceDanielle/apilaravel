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
           $agenda->save();
           return $encode = json_encode($agenda);
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $agenda = Agenda::find($id)->update($dados);
           return $encode = json_encode($agenda);
       }
   
       public function deletar($id){
           $agenda = Agenda::find($id)->delete();
           return $encode = json_encode($agenda);
       }
}
