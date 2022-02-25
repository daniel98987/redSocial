<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function getAmigos()
    {
       // $movie= new Movie;
   		 $usuarios=  Usuario::all();
    
         return view('amigos',array('usuarios'=>$usuarios));
    }
}
