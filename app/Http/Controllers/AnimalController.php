<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Cliente;

class AnimalController extends Controller
{
    public function listar(){
        return Animal::all();
       }
   
       public function listarId($id){
           return Animal::find($id);
       }
   
       public function salvar(Request $req, $id_cliente){

           $animal = new Animal($req->all());
           $animal->cliente_id = $id_cliente;
           $animal->save();
           return $encode = json_encode($animal);

       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           $animal = Animal::find($id)->update($dados);
           return $encode = json_encode($animal);
       }
   
       public function deletar($id){
           $animal = Animal::find($id)->delete();
           return $encode = json_encode($animal);
       } 
}
