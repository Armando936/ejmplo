<?php

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

Route::get('/inicio', function () {
    return view('bienvenida');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario','UsuarioController@index');

Route::get('/index','MateriaController@index');
Route::get('/create','MateriaController@create');
Route::get('/store','MateriaController@store');
Route::get('/update','MateriaController@update');
Route::get('/show','MateriaController@show');
Route::get('/edit','MateriaController@edit');
Route::get('/destroy','MateriaController@destroy');

Route::resource('materia','MateriaController');
















/*
Route::get('/materia/create',function()
           {
             return view('indexMateria');
           });
Route::post('/materia/store',function(){
  $materia = $_POST['materia'];
  //sql insert matere
  //redirect url
});
Route::get('/materia/show/{id}', 'MateriaController@show';
Route::get('/materia/listado', function()
           {return view('infoMateria');});
Route::get('/materia/edit/{id}',function()
           {return view('editMateria');});
Route::post('/materia/update',function(){
  $materia = $_POST['materia'];
  //sql update matere
  //redirect url
});
*/
