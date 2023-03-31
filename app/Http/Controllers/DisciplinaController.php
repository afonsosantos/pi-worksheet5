<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allDisciplinas = Disciplina::all();
        //dd($allDisciplinas);
        return view('disciplinas.index')->with('disciplinas', $allDisciplinas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplina $disciplina)
    {
        return view('disciplinas.show')->withDisciplina($disciplina);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disciplina $disciplina)
    {
        return view('disciplinas.edit')->withDisciplina($disciplina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        $disciplina->update($request->all());
        return redirect()->route('disciplinas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
