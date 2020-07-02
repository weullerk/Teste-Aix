<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/alunos', 'AlunoController@index');
Route::get('/alunos/cadastrar', 'AlunoController@cadastrar');
Route::get('/alunos/editar/{id}', 'AlunoController@editar');


Route::get('/cursos', 'CursoController@index');
Route::get('/cursos/cadastrar', 'CursoController@cadastrar');
Route::get('/cursos/editar/{id}', 'CursoController@editar');

Route::get('/importar-cursos', 'ImportarCursoController@index');
Route::get('/importar-cursos/analise', 'ImportarCursoController@analise');
