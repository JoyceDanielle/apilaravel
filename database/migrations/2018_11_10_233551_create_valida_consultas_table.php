<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidaConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valida_consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status_agenda');
            $table->string('data_agenda')->nullable();
            $table->string('horario')->nullable();
            $table->unsignedInteger('veterinario_id');

            $table->foreign('veterinario_id')->references('id')->on('veterinarios')->onDelete('cascade');
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
        Schema::dropIfExists('valida_consultas');
    }
}
