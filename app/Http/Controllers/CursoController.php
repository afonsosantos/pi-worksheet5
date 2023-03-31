<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CursoController extends Controller
{
    public function index(): View
    {
        $allCursos = Curso::all();
        Log::debug('Cursos has been loaded on the controller.', ['$allCursos' => $allCursos]);
        return view('cursos.index')->with('cursos', $allCursos);
    }

    public function create(): View
    {
        $newCurso = new Curso();
        return view('cursos.create')->withCurso($newCurso);
    }

    public function store(Request $request): RedirectResponse
    {
        Curso::create($request->all());
        return redirect()->route('cursos.index');
    }

    public function edit(Curso $curso): View
    {
        return view('cursos.edit')->withCurso($curso);
    }

    public function update(Request $request, Curso $curso): RedirectResponse
    {
        $curso->update($request->all());
        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso): RedirectResponse
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    public function show(Curso $curso): View
    {
        return view('cursos.show')->withCurso($curso);
    }
}
