<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Animal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new Cliente;
        $user->estado = "Acre";
        $user->numero = 22;
        $user->logradouro = "Av Rui";
        $user->cep = "550-30540";
        $user->bairro = "Petropolis";
        $user->complemento = null;
        $user->telefone = "3333-3333";
        $user->login = "cliente2@mail.com";
        $user->senha = "123";
        $user->tipo = "cliente";
        $user->nome = "Biu";
        $user->sobrenome = "Silva";
        $user->sexo = "M";
        $user->data_nascimento = "1991-01-01";
        $user->cpf = "000.33.457-98";
        $user->save();


        $animal = new Animal;
        $animal->nome ="Brown";
        $animal->raca = "Cocker";
        $animal->especie = "Canino";
        $animal->sexo = "M";
        $animal->data_nascimento = "2010-10-30";
        $animal->cliente_id = $user->id;
        $animal->save();
    }
}
