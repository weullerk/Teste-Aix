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
Route::match(['get', 'post'], '/alunos/cadastrar', 'AlunoController@cadastrar');
Route::match(['get', 'post'], '/alunos/editar/{id}', 'AlunoController@editar');


Route::get('/cursos', 'CursoController@index');
Route::match(['get', 'post'],'/cursos/cadastrar', 'CursoController@cadastrar');
Route::match(['get', 'post'], '/cursos/editar/{id}', 'CursoController@editar');

Route::match(['get', 'post'], '/importar-cursos', 'ImportarCursoController@index');
Route::match(['get', 'post'], '/importar-cursos/analise', 'ImportarCursoController@analise');
