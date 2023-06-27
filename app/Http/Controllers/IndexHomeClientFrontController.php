<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use App\Models\Projet;
use App\Models\ImageProjet;
use Illuminate\Http\Request;

class IndexHomeClientFrontController extends Controller
{
    //

    public function homepage()
    {

    //get partenaires from database and pass them in the welcome blade file

    $partenaires = Partenaire::all();

    //get projets from database and pass them in the welcome blade file

    $projets = Projet::latest()->paginate(8);

    //getting images from database and the assigned project with the with('relationship_name') method

    $images_projets = ImageProjet::with('projet')->latest()->paginate(8);

        return view('welcome', compact('partenaires', 'images_projets'));
    }
}
