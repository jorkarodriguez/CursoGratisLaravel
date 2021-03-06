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

Route:: get('/usuarios','UserControler@index');

Route :: get('/usuarios/{id}','UserControler@Mostraridusuario')->where('id','[0-9]+');

Route :: get('/usuarios/nuevo','UserControler@Newuser');


Route :: get('/saludo/{nombre}/{nickname}','WelcomeUserController@niknameok');


Route :: get('/saludo/{nombre}','WelcomeUserController@niknameoknon');
Route :: get('/usuarios/editar','UserControler@Edit');



