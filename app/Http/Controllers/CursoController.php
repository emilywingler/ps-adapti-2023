<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

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


    public function store(Request $request)
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
