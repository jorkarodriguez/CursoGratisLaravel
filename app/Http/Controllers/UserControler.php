<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index(){
        return 'usuario';
    }

public function Mostraridusuario($id){

    return "mostrando detalle del usuario :{$id}";
}

public function Newuser(){

    return "Crear Nuevo Usuario";
}

public function Edit(){

    return "Editar usuario";
}

}
