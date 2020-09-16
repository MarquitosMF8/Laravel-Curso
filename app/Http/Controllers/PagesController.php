<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $notas = app\Models\Nota::all();
        return view('welcome', compact('notas'));
    }

    public function fotos(){
        return view('fotos');
    }

    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre = null){
        $equipo = ['Ignacio','Juanito','Pedrito'];

        //return view('nosotros', ['equipo'=>$equipo,'nombre'=>$nombre]);
        return view('nosotros',compact('equipo','nombre'));
    }
}
