<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{
    public function listar(){
        return Servico::all();
       }
   
       public function listarId($id){
           return Servico::find($id);
       }
   
       public function salvar(Request $req, $id_cliente, $id_agenda, $id_valida){
           $servico = new Servico($req->all());
           $servico->cliente_id = $id_cliente;
           $servico->agenda_id = $id_agenda;
           $servico->valida_consulta_id = $id_valida;
           $servico->save();
           return $encode = json_encode($servico);
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $servico = Servico::find($id)->update($dados);
           return $encode = json_encode($servico);
       }
   
       public function deletar($id){
           $servico = Servico::find($id)->delete();
           return $encode = json_encode($servico);
       }
}
