<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FaireUnDon;
use App\Models\ImageProjet;
use App\Models\Partenaire;
use App\Models\Projet;
use App\Models\TeamMember;
use App\Models\TypeProjet;
use Illuminate\Http\Request;

class StatController extends Controller
{
    //
    public function getStat()
    {
        $projets = Projet::all();

        $partenaires = Partenaire::all();

        $contacts = Contact::all();

        $type_de_projets = TypeProjet::all();

        $donateurs = FaireUnDon::all();

        $staffs = TeamMember::all();

        $images = ImageProjet::all();

        $members = TeamMember::all();


        return view('stats', compact('members','images','projets', 'partenaires', 'contacts', 'type_de_projets', 'donateurs', 'staffs'));

    }
}
