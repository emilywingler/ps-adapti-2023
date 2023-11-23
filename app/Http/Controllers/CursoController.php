<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCursoRequest;

use App\Http\Requests\UpdateCursoRequest;

use App\Models\Curso;

class CursoController extends Controller
{

    private $cursos;

    public function __construct(Curso $curso)
    {
        $this->cursos = $curso;
    }

    // @return \Illuminate\Http\Response

    public function index()
    {
        $cursos = $this->cursos->all();
        return view('admin.curso.index', compact('cursos'));
    }



    public function create()
    {
        return view('admin.curso.crud');
    }

    public function store(StoreCursoRequest $request)
    {
        $data = $request->all(); //Todos os dados que a pessoa criou
        $this->cursos->create($data);
        return redirect()->route('curso.index')->with('success', 'Curso cadastrado com sucesso.');
    }

    public function show($id)
    {
        $curso = $this->cursos->find($id);
        return response()->json($curso);
    }

    public function edit($id)
    {
        $curso = $this->cursos->find($id); //Quero editar um curso não uma lista de cursos
        return view('admin.curso.crud', compact('curso'));
    }

    public function update(UpdateCursoRequest $request, $id)
    {
        $data = $request->all();
        $curso = $this->cursos->find($id);
        $curso->update($data);
        return redirect()->route('curso.index')->with('success', 'Curso editado com sucesso.');
    }

    public function destroy($id)
    {
        // $curso = $this->cursos->find($id);
        // $curso->delete();
        // return redirect()->route('curso.index')->with('success', 'Curso excluído com sucesso.');
    }
}
