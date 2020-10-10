<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function homePage(){
        return view('homePage');
    }
    public function notasPage(){
        $notas = App\Nota::paginate(5);
        return view('notasPage', compact('notas'));
    }

    public function detalle($id){
        $nota = App\Nota::findOrFail($id);//Rescatando toda la Nota desde la base de datos
        return view('notas.detalle',compact('nota'));
    }

    public function crear(Request $request){
        //return $request->all();
        //Validar los campos del formulario
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=>'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre; //agregar a la base de datos
        $notaNueva->descripcion = $request->descripcion; //agregar a la base de datos

        $notaNueva->save();

        return back()->with('mensaje', 'Nota Agregada!');
    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre'=> 'required',
            'descripcion'=>'required'
        ]);

        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();
        return back()->with('mensaje','Nota actualizada');
    }

    public function eliminar($id){
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();

        return back()->with('mensaje','Nota Eliminada');
    }

    public function fotos(){
        return view('fotos');
    }

    public function blog(){
        return view('blog');
    }

    public function nosotros($nombre = null){
        $equipo = [
            'Andres',
            'Daniel',
            'Rimer',
            'Fidel',
            'Ariel'
        ];
        //return view('nosotros',['equipo'=> $equipo]);
        return view('nosotros',compact('equipo','nombre'));
    }

    public function asignacion(){
        return view('asignationPage');
    }
}
