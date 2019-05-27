<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Usuarios';
    }

    public function show($id)
    {
        return 'Mostrando el id del usuario: '.$id;   
    }

    public function create()
    {
        return 'Crear un nuevo usuario';
    }

    public function usuario($name, $nickname = null)
    {
        if($nickname){
            return "Bienvenido {$name}, tu apodo es {$nickname}";
        }else{
            return "Bienvenido {$name}, tu no tienes apodo";
        }
    }
}
