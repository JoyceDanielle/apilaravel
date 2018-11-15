<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValidaConsulta;

class ValidaConsultaController extends Controller
{
    public function listar(){
        return ValidaConsulta::all();
       }
   
       public function listarId($id){
           return ValidaConsulta::find($id);
       }
   
       public function salvar(Request $req, $id_veterinario){
           $valida = new ValidaConsulta($req->all());
           $valida->veterinario_id = $id_veterinario;
           $valida->save();
           return $encode = json_encode($valida);
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $valida = ValidaConsulta::find($id)->update($dados);
           return $encode = json_encode($valida);
       }
   
       public function deletar($id){
           $valida = ValidaConsulta::find($id)->delete();
           return $encode = json_encode($valida);
       }
}
