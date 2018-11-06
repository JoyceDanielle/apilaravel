<?php

use Illuminate\Http\Request;
use App\Cliente;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/**
 * rotas cliente
 */ 

Route::get('cliente', 'ClienteController@listar');
Route::get('cliente/{id}', 'ClienteController@listarId');
Route::post('cliente', 'ClienteController@salvar');
Route::put('cliente/{id}', 'ClienteController@atualizar');

Route::delete('cliente/{id}', 'ClienteController@deletar');

/**
 * rotas animal
 */

Route::get('animal', 'AnimalController@listar');
Route::get('animal/{id}', 'AnimalController@listarId');
Route::post('animal/{id_cliente}', 'AnimalController@salvar');
Route::put('animal/{id}', 'AnimalController@atualizar');
Route::delete('animal/{id}', 'AnimalController@deletar');

 /**
  * rotas agenda
  */

Route::get('agenda', 'AgendaController@listar');
Route::get('agenda/{id}', 'AgendaController@listarId');
Route::post('agenda/{id_veterinario}', 'AgendaController@salvar');
Route::put('agenda/{id}', 'AgendaController@atualizar');
Route::delete('agenda/{id}', 'AgendaController@deletar');

/**
 * rotas clinica
 */
Route::get('clinica/{id}', 'ClinicaController@vet');

Route::get('clinica', 'ClinicaController@listar');
Route::get('clinica/{id}', 'ClinicaController@listarId');
Route::post('clinica', 'ClinicaController@salvar');
Route::put('clinica/{id}', 'ClinicaController@atualizar');
Route::delete('clinica/{id}', 'ClinicaController@deletar');

/**
 * rotas veterinario
 */

Route::get('veterinario', 'VeterinarioController@listar');
Route::get('veterinario/{id}', 'VeterinarioController@listarId');
Route::post('veterinario/{id_clinica}', 'VeterinarioController@salvar');
Route::put('veterinario/{id}', 'VeterinarioController@atualizar');
Route::delete('veterinario{id}', 'VeterinarioController@deletar');

/**
 * rotas servico
 */

Route::get('servico', 'ServicoController@listar');
Route::get('servico/{id}', 'ServicoController@listarId');
Route::post('servico/{id_cliente}/{id_agenda}', 'ServicoController@salvar');
Route::put('servico/{id}', 'ServicoController@atualizar');
Route::delete('servico/{id}', 'ServicoController@deletar');

/**
 * rotas atendimento
 */

Route::get('atendimento', 'VeterinarioServicoAnimalControllerS@listar');