<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\ImageProjet;

use Illuminate\Http\Request;

class ImageProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $images = ImageProjet::all();

        return view('admin.imagesprojets.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $projets = Projet::all();

        return view('admin.imagesprojets.create', compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datas = $request->validate([
            'projet_id' => 'required',
            'image_projet' => 'required',

        ]);

        $file_name = $request->file('image_projet')->getClientOriginalName();

        $path = $request->file('image_projet')->storeAs('images_projets', $file_name, 'public');

        $datas['image_projet'] = '/storage/'.$path;

       // dd($datas);

        ImageProjet::create($datas);

        return redirect()->route('imagesprojets.index')->with('success', 'Image ajoutée avec succès !');


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
    public function edit(string $id)
    {
        //
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
    public function destroy(ImageProjet $imageprojet)
    {
        //
        $imageprojet->delete();


       // Storage::disk('public')->delete('/storage/images_partenaires'.$partenaire->image_logo);

        return redirect()->route('imagesprojets.index')->with('success', 'Image Supprimée avec succès !');
    }
}
