<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index (){
        $curso = Curso::all();
        return view('cursos.index',compact('curso'));
    }
    public function create (){
        return view('cursos.create');
    }
    public function show($curso){
        return view('cursos.show',compact($curso));
    }
    public function store(Request $table){
        $table->validate([
            'modelo'=>'required',
            'cilindraje'=>'required',
            'año'=>'required|numeric',
            'descripcion'=>'required',
            'image'=>'required|image', 
        ]);
        $curso = Curso::create($table->all());

        if($table->hasFile('image')){
            $modelo->$curso->id.'.'.$table->file('image')->getClientOriginalExtension();
            $img = $table->file('image')->storeAs('public/img',$modelo);
            $curso->image = '/img/'.$modelo;
            $curso->save();
        }
        return redirect()->route('cursos.index')->with('success','Articulo Agregado Exitosamente'); 
    }
    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }
    public function update(Request $table, Curso $curso){
        $table->validate([
            'modelo'=>'required',
            'año'=>'required|numeric',
            'descripcion'=>'required',
        ]);
        if($table->hasFile('image')){
            Storage::disk('public')->delete($curso->image);
            $modelo = $curso->id.'.'.$table->file('image')->getClientOriginalExtension();
            $table->file('image')->storeAs('public/img',$modelo);
            $curso->image = '/img/'.$modelo;
            $curso->save();
        }
        $curso->update($table->input());
        return redirect()->route('cursos.index')->with('success','Articulo Actualizado Exitosamente');
    }
    public function destroy(Curso $curso){
        Storage::disk('public')->delete($curso->image);
        $curso->delete();
        return redirect()->route('cursos.index')->with('success','Articulo Eliminado Exitosamente');
    }
}
