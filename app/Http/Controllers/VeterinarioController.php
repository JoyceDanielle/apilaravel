<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veterinario;
use DB;

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
           $veterinario->save();
           return $encode = json_encode($veterinario);
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $veterinario = Veterinario::find($id)->update($dados);
           return $encode = json_encode($veterinario);
       }
   
       public function deletar($id){
           $veterinario = Veterinario::find($id)->delete();
           return $encode = json_encode($veterinario);
       }

       public function logar($login, $senha){
/*
        $first = DB::table('veterinarios')
        ->where('login', '=', $login);

        $veterinario = DB::table('veterinarios')
        ->where('senha', '=', $senha)
        ->union($first)
        ->get();

        return $encode = json_encode($veterinario);
        */

        $veterinario = DB::select(' select * from veterinarios where login = ? AND senha = ? ', [$login, $senha]);  
        $veterinario_obj = $veterinario[0];
        return $encode = json_encode($veterinario_obj);
    }
}
 