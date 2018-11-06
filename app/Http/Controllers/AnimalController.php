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
           
           return $animal->save();
       }
   
       public function atualizar(Request $req, $id){
           $dados = $req->all();
           return Animal::find($id)->update($dados);
       }
   
       public function deletar($id){
           return Animal::find($id)->delete();
       } 
}
