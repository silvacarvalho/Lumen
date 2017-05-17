<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Rotas para o controler Agenda
$app->get('/',[
    'as' => 'agenda.index',
    'uses'=>'AgendaController@index'
]);

$app->get('/{letra}',[
    'as' => 'agenda.letra',
    'uses'=>'AgendaController@index'
]);

$app->post('/busca',[
    'as' => 'agenda.busca',
    'uses'=>'AgendaController@busca'
]);
// Fim Rotas controller Agenda

//======================================================================================================================

// Rotas para o controller Pessoa
$app->get('/contato/novo', [
    'as' => 'pessoa.create',
    'uses' => 'PessoaController@create'
]);

$app->get('/contato/{id}/apagar',[
    'as' => 'pessoa.delete',
    'uses'=>'PessoaController@delete'
]);

$app->get('/contato/{id}/ver',[
    'as' => 'pessoa.detalhes',
    'uses'=>'PessoaController@detalhes'
]);

$app->get('/contato/{id}/editar',[
    'as' => 'pessoa.alterar',
    'uses'=>'PessoaController@alterar'
]);

$app->post('/contato', [
    'as' => 'pessoa.store',
    'uses' => 'PessoaController@store'
]);

$app->put('/contato/{id}',[
    'as' => 'pessoa.update',
    'uses'=>'PessoaController@update'
]);

$app->delete('/contato/{id}',[
    'as' => 'pessoa.destroy',
    'uses'=>'PessoaController@destroy'
]);
// Fim Rotas controller Pessoa

//======================================================================================================================

// Rotas para o controller Telefone
$app->get('/telefone/{id}/novo',[
    'as' => 'telefone.create',
    'uses'=>'TelefoneController@create'
]);

$app->get('/telefone/{id}/apagar',[
    'as' => 'telefone.delete',
    'uses'=>'TelefoneController@delete'
]);

$app->get('/telefone/{id}/editar',[
    'as' => 'telefone.alterar',
    'uses'=>'TelefoneController@alterar'
]);

$app->put('/telefone/{id}',[
    'as' => 'telefone.update',
    'uses'=>'TelefoneController@update'
]);

$app->post('/telefone', [
    'as' => 'telefone.store',
    'uses' => 'TelefoneController@store'
]);

$app->delete('/telefone/{id}',[
    'as' => 'telefone.destroy',
    'uses'=>'TelefoneController@destroy'
]);
// Fim Rotas controller Telefone

//======================================================================================================================

// Rotas para o controller E-Mail

$app->get('/email/{id}/novo',[
    'as' => 'email.create',
    'uses' => 'EmailController@create'
]);

$app->post('/email', [
    'as' => 'email.store',
    'uses' => 'EmailController@store'
]);

$app->post('/email/{id}/apagar', [
    'as' => 'email.delete',
    'uses' => 'EmailController@delete'
]);

$app->get('/email/{id}/editar', [
    'as' => 'email.alterar',
    'uses' => 'EmailController@alterar'
]);

$app->put('/email/{id}', [
    'as' => 'email.update',
    'uses' => 'EmailController@update'
]);

$app->get('/email/{id}/apagar', [
    'as' => 'email.delete',
    'uses' => 'EmailController@delete'
]);

$app->delete('/email/{id}', [
    'as' => 'email.destroy',
    'uses' => 'EmailController@destroy'
]);

// Fim Rotas controller E-Mail