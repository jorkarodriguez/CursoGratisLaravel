<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function niknameok($nombre, $nickname)
    {
        return "bienvenido {$nombre}, y tu apodo es {$nickname}";
    }
    public function niknameoknon($nombre)
    {
        return "bienvenido {$nombre} y no tienes ningun apodo";
    }


    public function unafun()
    {
        return "hika";
    }
}
