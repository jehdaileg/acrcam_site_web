<?php

namespace App\Http\Controllers;

use App\Models\ImageActivite;
use Illuminate\Http\Request;

class VoirToutesLesActivitesController extends Controller
{
    //

    public function getAllActivites()
    {

        $images_activites = ImageActivite::with('activite')->latest()->paginate(20);

         return view('voirtouteslesactivites', compact('images_activites'));
    }
}
