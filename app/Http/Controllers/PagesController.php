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

    public function detalle($id){
        $nota = app\Models\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){
        // return $request->all();

        $notaNueva = new App\Models\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada!');
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
