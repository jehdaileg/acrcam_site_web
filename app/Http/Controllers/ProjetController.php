<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\TypeProjet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projets = Projet::latest()->paginate(15);

        return view('admin.projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types_projets = TypeProjet::all();

        return view('admin.projets.create', compact('types_projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'commmentaires_projet' => 'required',
            'date_realisation' => 'required',
            'partenaire_concerne' => 'required',
            'revenu_benefice_projet' => 'required',
            'statut_projet'=> 'required',
            'type_projet_id' => 'required'
        ]);

        Projet::create($request->all());

        return redirect()->route('projets.index')->with('success', 'Projet crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
        return view('admin.projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
        $types_projets = TypeProjet::all();

        return view('admin.projets.edit', compact('types_projets', 'projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        //
        $request->validate([
            'name' => 'required',
            'commmentaires_projet' => 'required',
            'date_realisation' => 'required',
            'partenaire_concerne' => 'required',
            'revenu_benefice_projet' => 'required',
            'statut_projet'=> 'required',
            'type_projet_id' => 'required'
        ]);

        $projet->update($request->all());

        return redirect()->route('projets.index')->with('success', 'Projet Modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        //
        $projet->delete();

        return redirect()->route('projets.index')->with('success', 'Projet Supprimé avec succès !');

    }
}
