<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PhpParser\Node\Stmt\Return_;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Models\Nota::paginate(4);
        return view('welcome', compact('notas'));
    }

    public function detalle($id){
        $nota = app\Models\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){
        // return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

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

    public function editar($id){
        $nota = App\Models\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }
    
    public function update(Request $request, $id){
        
        $notaActualizada = App\Models\Nota::find($id);
        $notaActualizada->nombre = $request->nombre;
        $notaActualizada->descripcion = $request->descripcion;
        $notaActualizada->save();
        return back()->with('mensaje', 'Nota editada!');
    
    }

    public function eliminar($id){

        $notaEliminar = App\Models\Nota::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }
    
}
