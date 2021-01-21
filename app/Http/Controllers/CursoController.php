<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

use function GuzzleHttp\Promise\all;

class CursoController extends Controller
{
    public function index(){

        $curso = Curso::orderby('id', 'desc')->paginate();

        return view("cursos.index", compact('curso'));
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));

    }

    public function update(Request $request,Curso $curso){

        $request->validate([

            'name'=>'required',
            'description' => 'required',
            'categoria' => 'required'

        ]);

        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);

    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        /* $request->validate([

            'nombre'=>'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);

         $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
        

    }


    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');

    }

}