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

Route:: get('/usuarios',function(){
    return 'usuario';
});

Route :: get('/usuarios/{id}',function($id){
     return 'mostrando detalle del usuario :'.$id;

})->where('id','[0-9]+');

Route :: get('/usuarios/nuevo',function(){
return 'crear nuevo usuario';
});


Route :: get('/saludo/{nombre}/{nickname?}',function($nombre,$nickname=null){

    if($nickname){
        return "bienvenido {$nombre}, y tu apodo es {$nickname}";

    }
    else {
        return "bienvenido {$nombre} y no tienes ningun apodo";
    }


});





