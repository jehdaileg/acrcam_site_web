<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use App\Models\ImageProjet;
use Illuminate\Http\Request;

class VoirTousLesProjetsController extends Controller
{
    //

    public function getAllProjets()
    {

        $images_projets = ImageProjet::with('projet')->latest()->paginate(20);

         return view('voirtouslesprojets', compact('images_projets'));
    }
}
