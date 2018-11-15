<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Clinica;
use DB;

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
           $clinica = Clinica::create($dados);
           return $encode = json_encode($clinica);

       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $clinica = Clinica::find($id)->update($dados);
           return $encode = json_encode($clinica);
       }
   
       public function deletar($id){
           $clinica = Clinica::find($id)->delete();
           return $encode = json_encode($clinica);
       }

       public function logar($login, $senha){

        $clinica = DB::select(' select * from clinicas where login = ? AND senha = ? ', [$login, $senha]);  
        $clinica_obj = $clinica[0];
        return $encode = json_encode($clinica_obj);
    }


}
