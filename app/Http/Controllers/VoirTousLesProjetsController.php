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
       // $images_projets = ImageProjet::with('projet')->latest()->paginate(8);

        // return view('welcome', compact('partenaires', 'images_projets'));
    }
}
