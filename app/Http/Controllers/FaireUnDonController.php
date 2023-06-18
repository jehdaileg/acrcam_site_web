<?php

namespace App\Http\Controllers;

use App\Models\FaireUnDon;
use Illuminate\Http\Request;

class FaireUnDonController extends Controller
{
    //

    public function index()
    {
        return view('faire_un_don');
    }

    public function storeDon(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'email',
            'adresse' => 'required',
            'telephone' => 'required',
           ]);

        FaireUnDon::create($request->all());

        return redirect()->route('faireundon')->with('success_donate', 'Merci pour votre intérêt de vouloir faire partie de la communauté. Nous prenons contact avec vous dans les prochaines 24 heures pour la phase suivante.');
    }

    //side admin

    public function index_admin()
    {
        $dons = FaireUnDon::latest()->paginate(2);
        return view('admin.faireundon.index', compact('dons'));
    }
}
