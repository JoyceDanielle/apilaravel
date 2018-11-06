<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function entrar(Request $req){
        $dados = $req->all();
    }
}
