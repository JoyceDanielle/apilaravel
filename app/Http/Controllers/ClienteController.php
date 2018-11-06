<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Cliente;

class ClienteController extends Controller
{
    
    public function listar(){
     return Cliente::all();
    }

    public function listarId($id){
        return Cliente::find($id);
    }

    public function salvar(Request $req){
        $dados = $req->all();
        return Cliente::create($dados);
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();
        $cliente = Cliente::find($id)->update($dados);
        return $cliente;
    }

    //teste
    public function mudarSenha(Request $req, $id){
        $users = DB::table('clientes')->select('senha')->where('id', '=', $id)->get();
        $dados = $req->$users;
        $cliente = Cliente::find($id)->update($dados);
    }

    public function deletar($id){
        $cliente =Cliente::find($id)->delete();
        return $cliente;
    }

    //teste
    public function logar($email, $senha): boolean{
        Cliente::find($email, $senha);
    }
}
