<?php

namespace App\Http\Controllers;

use App\AreaTrabalho;
use App\Categoria;
use App\Moeda;
use App\Orcamento;
use App\Projecto;
use App\Skill;
use Illuminate\Http\Request;

class ProjectoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moedas= Moeda::all();
        $skills= Skill ::all();
        $area_trabalhos= AreaTrabalho ::all();
        $categorias= Categoria::all();
        $orcamentos= Orcamento::all();
        return view('project\index',compact('moedas','skills','area_trabalhos','categorias','orcamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectos = new Projecto();
        $projectos->nome = $request->nome;
        $projectos->descricao = $request->descricao;
        $projectos->moeda_id = $request->moeda;
        $projectos->validade = $request->validade;
        $projectos->orcamento_id = $request->orcamento;
        $projectos->categoria_id = $request->categoria;
        $projectos->area_trabalho_id = $request->area_trabalho;
        $projectos->cliente_id = 1;
        $projectos->save();
        return back()->with('success', 'Conteudo Carregado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function show(Projecto $projecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projecto $projecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projecto $projecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projecto  $projecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projecto $projecto)
    {
        //
    }
}
