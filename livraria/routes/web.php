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
Route::get('/', function () {
    return view('welcome');

    
});
Route::get('/livros', 'App\Http\Controllers\LivrosController@index')->name('livros.index');

Route::get('/autores', 'App\Http\Controllers\AutoresController@index')->name('autores.index');

Route::get('/editoras', 'App\Http\Controllers\EditorasController@index')->name('editoras.index');

Route::get('/generos', 'App\Http\Controllers\GenerosController@index')->name('generos.index');

Route::get('/livros/{id}/show', 'App\Http\Controllers\LivrosController@show')->name('livros.show');

Route::get('/autores/{id}/show', 'App\Http\Controllers\AutoresController@show')->name('autores.show');


Route::get('/editoras/{id}/show', 'App\Http\Controllers\EditorasController@show')->name('editoras.show');


Route::get('/generos/{id}/show', 'App\Http\Controllers\GenerosController@show')->name('generos.show');

Route::get('/edicoes', 'App\Http\Controllers\EdicoesController@index')->name('edicoes.index');

Route::get('/edicoes/{id}/show', 'App\Http\Controllers\EdicoesController@show')->name('edicoes.show');


//Livros


Route::get('/livros/create', 'App\Http\Controllers\LivrosController@create')->name('livros.create');

Route::post('/livros', 'App\Http\Controllers\LivrosController@store')->name('livros.store');

Route::get('/livros/{id}/edit', 'App\Http\Controllers\LivrosController@edit')->name('livros.edit');

Route::patch('/livros', 'App\Http\Controllers\LivrosController@update')->name('livros.update');

Route::get('/livros/{id}/delete', 'App\Http\Controllers\LivrosController@delete')->name('livros.delete');

Route::delete('/livros', 'App\Http\Controllers\LivrosController@destroy')->name('livros.destroy');


//Generos


Route::get('/generos/create', 'App\Http\Controllers\GenerosController@create')->name('generos.create');

Route::post('/generos', 'App\Http\Controllers\GenerosController@store')->name('generos.store');

Route::get('/generos/{id}/edit', 'App\Http\Controllers\GenerosController@edit')->name('generos.edit');

Route::patch('/generos', 'App\Http\Controllers\GenerosController@update')->name('generos.update');







//Editoras


Route::get('/editoras/create', 'App\Http\Controllers\EditorasController@create')->name('editoras.create');

Route::post('/editoras', 'App\Http\Controllers\EditorasController@store')->name('editoras.store');

Route::get('/editoras/{id}/edit', 'App\Http\Controllers\EditorasController@edit')->name('editoras.edit');

Route::patch('/editoras', 'App\Http\Controllers\EditorasController@update')->name('editoras.update');
