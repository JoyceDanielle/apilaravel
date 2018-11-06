<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado', 30);
            $table->string('cidade', 60);
            $table->integer('numero');
            $table->string('logradouro');
            $table->string('cep');
            $table->string('bairro');
            $table->string('complemento')->nullable(true);
            $table->string('telefone');
            $table->string('login',100)->unique();
            $table->string('senha');
            $table->enum('tipo',[1 , 2 , 3]);
            $table->string('nome');
            $table->string('sobrenome');
            $table->char('sexo', 1);
            $table->string('data_nascimento');
            $table->string('cpf', 14)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}