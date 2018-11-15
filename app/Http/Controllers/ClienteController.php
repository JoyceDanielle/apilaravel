<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Cliente;
use DB;

class ClienteController extends Controller
{
    
    public function listar(){
     return Cliente::all();
    }

  
    public function listarId($id){
        return Cliente::find($id);
    }

    public function listarComAnimal($id){
        $cliente = Cliente::find($id);
        return $animais = $cliente->animal()->get();
    }
    

    public function salvar(Request $req){
        $dados = $req->all();
        return Cliente::create($dados);
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $cliente = Cliente::find($id)->update($dados);
        return $encode = json_encode($cliente);
    }

    //teste
    public function mudarSenha(Request $req, $id){
        $users = DB::table('clientes')->select('senha')->where('id', '=', $id)->get();
        $dados = $req->$users;
        $cliente = Cliente::find($id)->update($dados);
    }

    public function deletar($id){
        $cliente =Cliente::find($id)->delete();
        return $encode = json_encode($cliente);
    }

    //teste
    public function logar($login, $senha){

        $cliente = DB::select(' select * from clientes where login = ? AND senha = ? ', [$login, $senha]);  
        $cliente_obj = $cliente[0];
        return $encode = json_encode($cliente_obj);
    }

}
