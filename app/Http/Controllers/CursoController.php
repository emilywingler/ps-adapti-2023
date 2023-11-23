<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCursoRequest;

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
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
