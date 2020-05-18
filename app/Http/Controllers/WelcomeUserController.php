<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($nombre,$nickname=null){

        if($nickname){
            return "bienvenido {$nombre}, y tu apodo es {$nickname}";
    
        }
        else {
            return "bienvenido {$nombre} y no tienes ningun apodo";
        }

    }
}
