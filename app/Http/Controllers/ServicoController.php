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
   
       public function salvar(Request $req, $id_cliente, $id_agenda){
           $servico = new Servico($req->all());
           $servico->cliente_id = $id_cliente;
           $servico->agenda_id = $id_agenda;
           return $servico->save();
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           return Servico::find($id)->update($dados);
       }
   
       public function deletar($id){
           return Servico::find($id)->delete();
       }
}
