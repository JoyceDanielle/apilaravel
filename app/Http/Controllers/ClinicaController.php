<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Clinica;

class ClinicaController extends Controller
{
    public function listar(){
        return Clinica::all();
       }

    public function vet($id){
        return Clinica::find($id)->veterinario;
    }
   
       public function listarId($id){
           return Clinica::find($id);
       }
   
       public function salvar(Request $req){
           $dados = $req->all();
           return Clinica::create($dados);
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $clinica = Clinica::find($id)->update($dados);
           return 200;
       }
   
       public function deletar($id){
           $clinica = Clinica::find($id)->delete();
           return 204;
       }


}
