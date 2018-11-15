<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tempo');
            $table->string('laudo');
            $table->enum('tipo',['coleta de sangue, fezes e urina','vacina', 'injeção', 'exame de rotina', 'aplicação de medicamentos']);
            $table->double('preco', 4, 2);

            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('agenda_id');
            $table->unsignedInteger('valida_consulta_id');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('agenda_id')->references('id')->on('agendas')->onDelete('cascade');
            $table->foreign('valida_consulta_id')->references('id')->on('valida_consultas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void 
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}