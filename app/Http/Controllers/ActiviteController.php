<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $activites = Activite::latest()->paginate(15);

        return view('admin.activites.index', compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.activites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'nom_activite' => 'required',
            'commentaires_activite' => 'required',
            'date_activite' => 'required',
        ]);

        Activite::create($request->all());

        return redirect()->route('activites.index')->with('success', 'Activité créée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activite $activite)
    {
        //
        return view('admin.activites.show', compact('activite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activite $activite)
    {
        //


        return view('admin.activites.edit', compact('activite'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activite $activite)
    {
        //
        $request->validate([
            'nom_activite' => 'required',
            'commentaires_activite' => 'required',
            'date_activite' => 'required',
        ]);


        $activite->update($request->all());

        return redirect()->route('activites.index')->with('success', 'Activité modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activite $activite)
    {
        //
        $activite->delete();

        return redirect()->route('activites.index')->with('success', 'Activité suprimée avec succès !');

    }
}
