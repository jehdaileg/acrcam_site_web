<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use App\Models\ImageActivite;

class ImageActiviteController extends Controller
{
    public function index()
    {
        //
        $images = ImageActivite::latest()->paginate(20);

        return view('admin.imagesactivites.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $activites = Activite::all();

        return view('admin.imagesactivites.create', compact('activites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datas = $request->validate([
            'activite_id' => 'required',
            'image_activite' => 'required',

        ]);

        $file_name = $request->file('image_activite')->getClientOriginalName();

        $path = $request->file('image_activite')->storeAs('images_activites', $file_name, 'public');

        $datas['image_activite'] = '/storage/'.$path;

       // dd($datas);

       ImageActivite::create($datas);

        return redirect()->route('imagesactivites.index')->with('success', 'Image ajoutée avec succès !');


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
    public function destroy(ImageActivite $imageactivite)
    {
        //
        $imageactivite->delete();


       // Storage::disk('public')->delete('/storage/images_partenaires'.$partenaire->image_logo);

        return redirect()->route('imagesactivites.index')->with('success', 'Image Supprimée avec succès !');
    }
}
