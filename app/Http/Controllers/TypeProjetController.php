<?php

namespace App\Http\Controllers;

use App\Models\TypeProjet;
use Illuminate\Http\Request;

class TypeProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $types_projets = TypeProjet::all();

        return view('admin.typeprojets.index', compact('types_projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.typeprojets.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nameTypeProjet' => 'required'
        ]);

        TypeProjet::create($request->all());

        return redirect()->route('typeprojets.index')->with('success', 'Type de projet crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeProjet $type_projet)
    {
        //
        dd($type_projet->nameTypeProjet);

        return view('admin.typeprojets.edit', compact('type_projet'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeProjet $typeprojet)
    {
        //

        //dd($typeprojet);
        $typeprojet->delete();

        return redirect()->route('typeprojets.index')->with('success', 'Type de projet Supprimé avec succès !');

    }
}
